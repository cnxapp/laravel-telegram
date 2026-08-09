<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi;

use Cnx\LaravelTelegram\BotApi\Generated\Types\ResponseParameters;
use Cnx\LaravelTelegram\Exceptions\TelegramException;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

final class Transport
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

    /** @return $this */
    public function bot(?string $botConfigName = null): self
    {
        $botConfigName ??= $this->defaultBotConfigName;
        if (! isset($this->botConfigs[$botConfigName])) {
            throw new TelegramException("The telegram bot config [{$botConfigName}] does not exist.");
        }

        $this->checkConfig($botConfigName, $this->botConfigs[$botConfigName]);
        $this->currentBotConfig = $this->botConfigs[$botConfigName];
        $this->currentBotConfigName = $botConfigName;

        return $this;
    }

    /**
     * @param  array<string, mixed>|Arrayable<string, mixed>|null  $parameters
     * @return array<string, mixed>
     */
    public function sendRequest(
        string $endpoint,
        string $method = 'get',
        array|Arrayable|null $parameters = null,
    ): array {
        $method = strtolower($method);
        if (! in_array($method, self::ALLOWED_API_METHODS, true)) {
            throw new TelegramException("Unsupported Telegram API method '{$method}'");
        }

        $endpoint = '/'.ltrim($endpoint, "\n\r\t\v\0\x20/");
        $botToken = $this->getBotConfig('bot_token');
        if (! is_string($botToken) || $botToken === '') {
            throw new TelegramException(
                "Bot config key 'bot_token' for configuration [{$this->currentBotConfigName}] is required",
            );
        }

        $requestParameters = $this->requestParameters($parameters);

        try {
            $payload = MultipartPayload::from($requestParameters);
            $pendingRequest = Http::acceptJson()
                ->connectTimeout($this->integerConfig('telegram.connect_timeout', 5))
                ->timeout($this->integerConfig('telegram.timeout', 30));
            foreach ($payload->attachments as $name => $file) {
                $headers = $file->mimeType === null ? [] : ['Content-Type' => $file->mimeType];
                $pendingRequest = $pendingRequest->attach($name, $file->contents(), $file->filename, $headers);
            }

            /** @var Response $response */
            $response = $pendingRequest->$method($this->apiUrl.'/bot'.$botToken.$endpoint, $payload->parameters);
            $responseData = $response->json();
            if (! $this->isStringKeyedArray($responseData)) {
                throw new TelegramException(
                    "Telegram API returned a non-JSON response. Status: {$response->status()} {$response->reason()}",
                );
            }

            if (! $response->successful() || ($responseData['ok'] ?? false) !== true) {
                $description = is_string($responseData['description'] ?? null)
                    ? $responseData['description']
                    : "HTTP {$response->status()} {$response->reason()}";
                $errorCode = is_int($responseData['error_code'] ?? null) ? $responseData['error_code'] : null;
                $responseParametersData = $responseData['parameters'] ?? null;
                $responseParameters = $this->isStringKeyedArray($responseParametersData)
                    ? ResponseParameters::from($responseParametersData)
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

    /** @param array<string, mixed> $config */
    private function checkConfig(string $botConfigName, array $config): void
    {
        if (empty($config['bot_token'])) {
            throw new TelegramException("The telegram bot config [{$botConfigName}] does not contain key 'bot_token'.");
        }
    }

    private function getBotConfig(?string $key = null, mixed $default = null): mixed
    {
        $config = $this->currentBotConfig ?? $this->defaultBotConfig ?? [];
        if ($key === null) {
            return $config;
        }

        return $config[$key] ?? $default;
    }

    /**
     * @param  array<string, mixed>|Arrayable<string, mixed>|null  $parameters
     * @return array<string, mixed>
     */
    private function requestParameters(array|Arrayable|null $parameters): array
    {
        $rawParameters = ($parameters instanceof Arrayable ? $parameters->toArray() : $parameters) ?? [];
        $requestParameters = [];
        foreach ($rawParameters as $key => $value) {
            if (! is_string($key)) {
                throw new TelegramException('Telegram API request parameters must use string keys.');
            }

            $requestParameters[$key] = $value;
        }

        return $requestParameters;
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
}
