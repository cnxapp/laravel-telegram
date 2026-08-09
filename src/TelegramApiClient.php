<?php

namespace Cnx\LaravelTelegram;

use Cnx\LaravelTelegram\BotApi\MultipartPayload;
use Cnx\LaravelTelegram\DTO\BotCommand;
use Cnx\LaravelTelegram\DTO\BotCommandScope;
use Cnx\LaravelTelegram\DTO\MenuButton;
use Cnx\LaravelTelegram\DTO\Message;
use Cnx\LaravelTelegram\DTO\MessageId;
use Cnx\LaravelTelegram\DTO\ResponseParameters;
use Cnx\LaravelTelegram\DTO\Update;
use Cnx\LaravelTelegram\DTO\User;
use Cnx\LaravelTelegram\DTO\WebhookInfo;
use Cnx\LaravelTelegram\Exceptions\TelegramDataException;
use Cnx\LaravelTelegram\Exceptions\TelegramException;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class TelegramApiClient
{
    private const ALLOWED_API_METHODS = ['get', 'post'];

    private string $apiUrl;

    private string $defaultBotConfigName;

    /** @var array<string, array<string, mixed>> */
    private array $botConfigs;

    /** @var array<string, mixed>|null */
    private ?array $defaultBotConfig = null;

    /** @var array<string, mixed>|null */
    private ?array $currentBotConfig = null;

    private string $currentBotConfigName;

    public function __construct()
    {
        $this->apiUrl = $this->stringConfig('telegram.api_url', 'https://api.telegram.org');
        $this->botConfigs = $this->botConfigs();
        $this->defaultBotConfigName = $this->stringConfig('telegram.default_bot_config', 'default');
        $this->currentBotConfigName = $this->defaultBotConfigName;
        if (isset($this->botConfigs[$this->defaultBotConfigName])) {
            $this->defaultBotConfig = $this->botConfigs[$this->defaultBotConfigName];
        }
    }

    private function stringConfig(string $key, string $default): string
    {
        $value = config($key, $default);

        return is_string($value) && $value !== '' ? $value : $default;
    }

    private function integerConfig(string $key, int $default): int
    {
        $value = config($key, $default);

        return is_int($value) && $value >= 0 ? $value : $default;
    }

    /** @return array<string, array<string, mixed>> */
    private function botConfigs(): array
    {
        $configuredBots = config('telegram.bot_configs', []);
        if (! is_array($configuredBots)) {
            return [];
        }

        $botConfigs = [];
        foreach ($configuredBots as $name => $config) {
            if (! is_string($name) || ! is_array($config)) {
                continue;
            }

            $botConfig = [];
            foreach ($config as $key => $value) {
                if (is_string($key)) {
                    $botConfig[$key] = $value;
                }
            }
            $botConfigs[$name] = $botConfig;
        }

        return $botConfigs;
    }

    /**
     * Use custom bot config
     *
     * @return $this
     *
     * @throws TelegramException
     */
    public function bot(?string $botConfigName = null): self
    {
        if (is_null($botConfigName)) {
            $botConfigName = $this->defaultBotConfigName;
        }
        if (! isset($this->botConfigs[$botConfigName])) {
            throw new TelegramException("The telegram bot config [$botConfigName] does not exist.");
        }
        $this->checkConfig($botConfigName, $this->botConfigs[$botConfigName]);
        $this->currentBotConfig = $this->botConfigs[$botConfigName];
        $this->currentBotConfigName = $botConfigName;

        return $this;
    }

    private function checkConfig(string $botConfigName, mixed $config): void
    {
        if (! is_array($config) || empty($config['bot_token'])) {
            throw new TelegramException("The telegram bot config [$botConfigName] does not contain key 'bot_token'.");
        }
    }

    /**
     * Get bot config param
     *
     * @return array|mixed|null
     */
    private function getBotConfig(?string $key = null, mixed $default = null): mixed
    {
        $config = $this->currentBotConfig ?? $this->defaultBotConfig ?? [];
        if ($key === null) {
            return $config;
        }

        return $config[$key] ?? $default;
    }

    /**
     * @param  array<string, mixed>|Arrayable<string, mixed>|null  $params
     * @return array<string, mixed>
     *
     * @throws TelegramException
     */
    public function sendRequest(string $endpoint, string $method = 'get', array|Arrayable|null $params = null): array
    {
        $method = strtolower($method);
        if (! in_array($method, self::ALLOWED_API_METHODS, true)) {
            throw new TelegramException("Unsupported Telegram API method '{$method}'");
        }

        $endpoint = '/'.ltrim($endpoint, "\n\r\t\v\0\x20/");
        $botToken = $this->getBotConfig('bot_token');
        if (! is_string($botToken) || $botToken === '') {
            throw new TelegramException("Bot config key 'bot_token' for configuration [{$this->currentBotConfigName}] is required");
        }
        $url = $this->apiUrl.'/bot'.$botToken.$endpoint;

        $rawParams = ($params instanceof Arrayable ? $params->toArray() : $params) ?? [];
        $requestParams = [];
        foreach ($rawParams as $key => $value) {
            if (! is_string($key)) {
                throw new TelegramException('Telegram API request parameters must use string keys.');
            }

            $requestParams[$key] = $value;
        }

        try {
            $payload = MultipartPayload::from($requestParams);
            $pendingRequest = Http::acceptJson()
                ->connectTimeout($this->integerConfig('telegram.connect_timeout', 5))
                ->timeout($this->integerConfig('telegram.timeout', 30));
            foreach ($payload->attachments as $name => $file) {
                $headers = $file->mimeType === null ? [] : ['Content-Type' => $file->mimeType];
                $pendingRequest = $pendingRequest->attach($name, $file->contents(), $file->filename, $headers);
            }

            /** @var Response $response */
            $response = $pendingRequest->$method($url, $payload->parameters);

            $responseData = $response->json();
            if (! $this->isStringKeyedArray($responseData)) {
                throw new TelegramException(
                    "Telegram API returned a non-JSON response. Status: {$response->status()} {$response->reason()}"
                );
            }

            if (! $response->successful() || ($responseData['ok'] ?? false) !== true) {
                $description = is_string($responseData['description'] ?? null)
                    ? $responseData['description']
                    : "HTTP {$response->status()} {$response->reason()}";
                $errorCode = is_int($responseData['error_code'] ?? null) ? $responseData['error_code'] : null;
                $responseParameters = is_array($responseData['parameters'] ?? null)
                    ? ResponseParameters::from($responseData['parameters'])
                    : null;

                throw new TelegramException($description, $errorCode, $responseParameters);
            }

            return $responseData;
        } catch (TelegramException $exception) {
            throw $exception;
        } catch (\Throwable $exception) {
            throw new TelegramException('Unable to make Telegram API request.', previous: $exception);
        } finally {
            $this->currentBotConfig = null;
            $this->currentBotConfigName = $this->defaultBotConfigName;
        }
    }

    /** @phpstan-assert-if-true array<string, mixed> $value */
    private function isStringKeyedArray(mixed $value): bool
    {
        if (! is_array($value)) {
            return false;
        }

        foreach (array_keys($value) as $key) {
            if (! is_string($key)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @throws TelegramDataException
     * @throws TelegramException
     */
    public function getMe(): User
    {
        $response = $this->sendRequest('getMe');
        try {
            if (! empty($response['ok'])) {
                return User::from($response['result']);
            }
        } catch (\Throwable $e) {
            throw new TelegramDataException('Not expected response from telegram API. Error: '.$e->getMessage());
        }
        throw new TelegramDataException('Not expected response from telegram API.');
    }

    /**
     * Use this method to get current webhook status.
     *
     * @throws TelegramDataException
     * @throws TelegramException
     */
    public function getWebhookInfo(): WebhookInfo
    {
        $response = $this->sendRequest('getWebhookInfo');
        try {
            if (! empty($response['ok'])) {
                return WebhookInfo::from($response['result']);
            }
        } catch (\Throwable $e) {
            throw new TelegramDataException('Not expected response from telegram API. Error: '.$e->getMessage());
        }
        throw new TelegramDataException('Not expected response from telegram API.');
    }

    /**
     * Use this method to specify a URL and receive incoming updates via an outgoing webhook.
     *
     * @param  string  $url  HTTPS URL to send updates to. Use an empty string to remove webhook integration
     * @param  string|null  $ip_address  The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     * @param  int  $max_connections  The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to 40. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     * @param  array<int, string>  $allowed_updates  A JSON-serialized list of the update types you want your bot to receive. For example, specify ["message", "edited_channel_post", "callback_query"]
     * @param  bool  $drop_pending_updates  Pass True to drop all pending updates
     * @param  string|null  $secret_token  A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters A-Z, a-z, 0-9, _ and - are allowed.
     *
     * @throws TelegramDataException
     * @throws TelegramException
     */
    public function setWebhook(
        string $url,
        ?string $ip_address = null,
        int $max_connections = 40,
        array $allowed_updates = [],
        bool $drop_pending_updates = false,
        ?string $secret_token = null,
    ): bool {
        $params = [
            'url' => $url,
            'allowed_updates' => $allowed_updates,
            'max_connections' => $max_connections,
            'drop_pending_updates' => $drop_pending_updates,
        ];

        if (! is_null($ip_address)) {
            $params['ip_address'] = $ip_address;
        }
        if (! is_null($secret_token)) {
            $params['secret_token'] = $secret_token;
        }

        $response = $this->sendRequest('setWebhook', 'post', $params);

        if (array_key_exists('result', $response)) {
            return (bool) $response['result'];
        }

        throw new TelegramDataException('Not expected response from telegram API.');
    }

    /**
     * Use this method to send text messages.
     *
     * @throws TelegramException
     */
    public function sendMessage(MessageBuilder $messageBuilder): ?Message
    {
        $result = $this->sendRequest('sendMessage', 'post', $messageBuilder->toArray());
        if ($result && ! empty($result['ok']) && ! empty($result['result'])) {
            return Message::from($result['result']);
        }

        return null;
    }

    /**
     * Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded.
     *
     * @param  int|string  $chatId  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int|string  $fromChatId  Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
     * @param  int  $messageId  Message identifier in the chat specified in from_chat_id
     * @param  int|null  $messageThreadId  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  bool  $disableNotification  Sends the message silently. Users will receive a notification with no sound.
     * @param  bool  $protectContent  Protects the contents of the forwarded message from forwarding and saving
     *
     * @throws TelegramException
     */
    public function forwardMessage(
        int|string $chatId,
        int|string $fromChatId,
        int $messageId,
        ?int $messageThreadId = null,
        bool $disableNotification = false,
        bool $protectContent = false,
    ): ?Message {
        $request = [
            'chat_id' => $chatId,
            'from_chat_id' => $fromChatId,
            'message_id' => $messageId,
            'disable_notification' => $disableNotification,
            'protect_content' => $protectContent,
        ];
        if (! is_null($messageThreadId)) {
            $request['message_thread_id'] = $messageThreadId;
        }

        $result = $this->sendRequest('forwardMessage', 'post', $request);
        if ($result && ! empty($result['ok']) && ! empty($result['result'])) {
            return Message::from($result['result']);
        }

        return null;
    }

    /**
     * Use this method to forward multiple messages of any kind.
     * If some of the specified messages can't be found or forwarded, they are skipped.
     * Service messages and messages with protected content can't be forwarded.
     * Album grouping is kept for forwarded messages.
     * On success, an array of MessageId of the sent messages is returned.
     *
     * @param  int|string  $chatId  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int|string  $fromChatId  Unique identifier for the chat where the original messages were sent (or channel username in the format @channelusername)
     * @param  int[]  $messageIds  An array of 1-100 identifiers of messages in the chat from_chat_id to forward. The identifiers must be specified in a strictly increasing order.
     * @param  int|null  $messageThreadId  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  bool  $disableNotification  Sends the messages silently. Users will receive a notification with no sound.
     * @param  bool  $protectContent  Protects the contents of the forwarded messages from forwarding and saving
     * @return array<int, MessageId>|null
     *
     * @throws TelegramException
     */
    public function forwardMessages(
        int|string $chatId,
        int|string $fromChatId,
        array $messageIds,
        ?int $messageThreadId = null,
        bool $disableNotification = false,
        bool $protectContent = false,
    ): ?array {
        sort($messageIds);
        $request = [
            'chat_id' => $chatId,
            'from_chat_id' => $fromChatId,
            'message_ids' => $messageIds,
            'disable_notification' => $disableNotification,
            'protect_content' => $protectContent,
        ];
        if (! is_null($messageThreadId)) {
            $request['message_thread_id'] = $messageThreadId;
        }

        $result = $this->sendRequest('forwardMessages', 'post', $request);
        if (! empty($result['result']) && is_array($result['result'])) {
            $messageIds = [];
            foreach ($result['result'] as $messageId) {
                if (! is_array($messageId)) {
                    throw new TelegramDataException('Not expected response from Telegram API.');
                }

                $messageIds[] = MessageId::from($messageId);
            }

            return $messageIds;
        }

        return null;
    }

    /**
     * @param  array<int, string>|null  $allowedUpdates
     * @return Collection<int, Update>
     */
    public function getUpdates(
        ?int $offset = null,
        int $limit = 100,
        int $timeout = 0,
        ?array $allowedUpdates = null,
    ): Collection {
        $request = [
            'limit' => $limit,
            'timeout' => $timeout,
        ];
        if (! is_null($offset)) {
            $request['offset'] = $offset;
        }
        if (! empty($allowedUpdates)) {
            $request['allowed_updates'] = $allowedUpdates;
        }
        $result = $this->sendRequest('getUpdates', 'post', $request);

        if (! is_array($result['result'] ?? null)) {
            throw new TelegramDataException('Not expected response from Telegram API.');
        }

        return Update::collect($result['result'], Collection::class);
    }

    /**
     * @param  array<int, BotCommand>|Collection<int, BotCommand>  $commands
     *
     * @throws TelegramDataException
     * @throws TelegramException
     */
    public function setMyCommands(array|Collection $commands, ?BotCommandScope $scope = null, ?string $languageCode = null): bool
    {
        $commands = is_array($commands) ? collect($commands) : $commands;
        $params = [
            'commands' => $commands->toArray(),
        ];
        if (! is_null($scope)) {
            $params['scope'] = $scope->toArray();
        }
        if (! empty($languageCode)) {
            $params['language_code'] = $languageCode;
        }
        $response = $this->sendRequest('setMyCommands', 'post', $params);

        if (array_key_exists('result', $response)) {
            return (bool) $response['result'];
        }

        throw new TelegramDataException('Not expected response from telegram API.');
    }

    /**
     * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, higher level commands will be shown to affected users. Returns True on success.
     *
     * @param  BotCommandScope|null  $scope  A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
     * @param  string|null  $languageCode  A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     *
     * @throws TelegramDataException
     * @throws TelegramException
     */
    public function deleteMyCommands(?BotCommandScope $scope = null, ?string $languageCode = null): bool
    {
        $params = [];
        if (! is_null($scope)) {
            $params['scope'] = $scope->toArray();
        }
        if (! empty($languageCode)) {
            $params['language_code'] = $languageCode;
        }
        $response = $this->sendRequest('deleteMyCommands', 'post', $params);

        if (array_key_exists('result', $response)) {
            return (bool) $response['result'];
        }

        throw new TelegramDataException('Not expected response from telegram API.');
    }

    /**
     * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
     *
     * @link https://core.telegram.org/bots/api#getmycommands
     *
     * @param  BotCommandScope|null  $scope  A JSON-serialized object, describing scope of users. Defaults to BotCommandScope with type Default
     * @param  string|null  $languageCode  A two-letter ISO 639-1 language code or an empty string
     * @return Collection<int, BotCommand>
     *
     * @throws TelegramException|TelegramDataException
     */
    public function getMyCommands(?BotCommandScope $scope = null, ?string $languageCode = null): Collection
    {
        $params = [];
        if (! is_null($scope)) {
            $params['scope'] = $scope->toArray();
        }
        if (! is_null($languageCode)) {
            $params['language_code'] = $languageCode;
        }
        $response = $this->sendRequest('getMyCommands', 'post', $params);

        if (is_array($response['result'] ?? null)) {
            return BotCommand::collect($response['result'], Collection::class);
        }

        throw new TelegramDataException('Not expected response from telegram API.');
    }

    /**
     * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#setchatmenubutton
     *
     * @param  int|null  $chatId  Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
     * @param  MenuButton|null  $menuButton  A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
     *
     * @throws TelegramException|TelegramDataException
     */
    public function setChatMenuButton(?int $chatId = null, ?MenuButton $menuButton = null): bool
    {
        $params = [];
        if (! is_null($chatId)) {
            $params['chat_id'] = $chatId;
        }
        if (! is_null($menuButton)) {
            $params['menu_button'] = $menuButton->toArray();
        }
        $response = $this->sendRequest('setChatMenuButton', 'post', $params);

        if (array_key_exists('result', $response)) {
            return (bool) $response['result'];
        }

        throw new TelegramDataException('Not expected response from telegram API.');
    }

    public function getChatMenuButton(?int $chatId = null): MenuButton
    {
        $params = [];
        if (! is_null($chatId)) {
            $params['chat_id'] = $chatId;
        }

        $response = $this->sendRequest('getChatMenuButton', 'post', $params);

        try {
            if (! empty($response['ok'])) {
                return MenuButton::from($response['result']);
            }
        } catch (\Throwable $e) {
            throw new TelegramDataException('Not expected response from telegram API. Error: '.$e->getMessage());
        }
        throw new TelegramDataException('Not expected response from telegram API.');
    }
}
