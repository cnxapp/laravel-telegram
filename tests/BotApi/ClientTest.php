<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Tests\BotApi;

use Cnx\LaravelTelegram\BotApi\Generated\Requests\ForwardMessagesRequest;
use Cnx\LaravelTelegram\BotApi\Generated\Requests\GetMyCommandsRequest;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeDefault;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaPhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputPollOption;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageId;
use Cnx\LaravelTelegram\BotApi\Generated\Types\User;
use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\MultipartPayload;
use Cnx\LaravelTelegram\BotApiClient;
use Cnx\LaravelTelegram\Exceptions\TelegramException;
use Cnx\LaravelTelegram\Tests\TestCase;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

class ClientTest extends TestCase
{
    public function test_generated_client_calls_and_hydrates_a_typed_method(): void
    {
        Http::fake([
            '*botdefault-token/getMe' => Http::response([
                'ok' => true,
                'result' => ['id' => 7, 'is_bot' => true, 'first_name' => 'Bot'],
            ]),
        ]);

        $user = $this->application()->make(BotApiClient::class)->getMe();

        self::assertInstanceOf(User::class, $user);
        self::assertSame(7, $user->id);
    }

    public function test_generated_client_calls_and_hydrates_a_typed_list_method(): void
    {
        Http::fake([
            '*botdefault-token/forwardMessages' => Http::response([
                'ok' => true,
                'result' => [['message_id' => 11], ['message_id' => 12]],
            ]),
        ]);

        $result = $this->application()->make(BotApiClient::class)->forwardMessages(
            new ForwardMessagesRequest(chatId: 100, fromChatId: 200, messageIds: [3, 8]),
        );

        self::assertSame([11, 12], array_map(static fn (MessageId $id): int => $id->messageId, $result));
        Http::assertSent(fn (Request $request): bool => $request->url() === 'https://api.telegram.org/botdefault-token/forwardMessages'
            && $request['message_ids'] === [3, 8]);
    }

    public function test_telegram_error_contains_typed_response_parameters(): void
    {
        Http::fake([
            '*' => Http::response([
                'ok' => false,
                'error_code' => 429,
                'description' => 'Too Many Requests',
                'parameters' => ['retry_after' => 15],
            ], 429),
        ]);

        try {
            $this->application()->make(BotApiClient::class)->getMe();
            self::fail('TelegramException was not thrown.');
        } catch (TelegramException $exception) {
            self::assertSame(429, $exception->telegramErrorCode());
            self::assertSame(15, $exception->responseParameters()?->retryAfter);
        }
    }

    public function test_selected_bot_is_reset_after_failed_request(): void
    {
        Http::fake([
            '*botsecondary-token/getMe' => Http::response([
                'ok' => false,
                'error_code' => 401,
                'description' => 'Unauthorized',
            ], 401),
            '*botdefault-token/getMe' => Http::response([
                'ok' => true,
                'result' => ['id' => 99, 'is_bot' => true, 'first_name' => 'Default'],
            ]),
        ]);

        $client = $this->application()->make(BotApiClient::class);
        try {
            $client->bot('secondary')->getMe();
        } catch (TelegramException) {
        }

        self::assertSame(99, $client->getMe()->id);
    }

    public function test_nested_input_type_is_sent_as_an_object(): void
    {
        Http::fake(['*' => Http::response(['ok' => true, 'result' => []])]);

        $this->application()->make(BotApiClient::class)->getMyCommands(
            new GetMyCommandsRequest(scope: new BotCommandScopeDefault(type: 'default')),
        );

        Http::assertSent(fn (Request $request): bool => $request['scope'] === ['type' => 'default']);
    }

    public function test_multipart_payload_supports_direct_and_nested_files(): void
    {
        $photo = InputFile::fromContents('photo-bytes', 'photo.jpg', 'image/jpeg');
        $thumbnail = InputFile::fromContents('thumb-bytes', 'thumb.jpg');
        $pollOption = new InputPollOption(
            text: 'Photo',
            media: new InputMediaPhoto(type: 'photo', media: $thumbnail),
        );

        $payload = MultipartPayload::from([
            'photo' => $photo,
            'poll_option' => $pollOption->toArray(),
        ]);

        self::assertArrayNotHasKey('photo', $payload->parameters);
        $pollOptionJson = $payload->parameters['poll_option'];
        self::assertIsString($pollOptionJson);
        self::assertSame(
            ['text' => 'Photo', 'media' => ['type' => 'photo', 'media' => 'attach://attachment_1']],
            json_decode($pollOptionJson, true, flags: JSON_THROW_ON_ERROR),
        );
        self::assertSame($photo, $payload->attachments['photo']);
        self::assertSame($thumbnail, $payload->attachments['attachment_1']);
    }
}
