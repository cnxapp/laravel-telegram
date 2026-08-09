<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Tests;

use Cnx\LaravelTelegram\DTO\BotCommandScope;
use Cnx\LaravelTelegram\DTO\MessageId;
use Cnx\LaravelTelegram\Enums\BotScopeType;
use Cnx\LaravelTelegram\Exceptions\TelegramException;
use Cnx\LaravelTelegram\TelegramApiClient;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

class TelegramApiClientTest extends TestCase
{
    public function test_forward_messages_uses_correct_endpoint_and_returns_message_id_dtos(): void
    {
        Http::fake([
            '*botdefault-token/forwardMessages' => Http::response([
                'ok' => true,
                'result' => [['message_id' => 11], ['message_id' => 12]],
            ]),
        ]);

        $result = $this->application()->make(TelegramApiClient::class)
            ->forwardMessages(100, 200, [8, 3]);

        self::assertNotNull($result);
        self::assertSame([11, 12], array_map(static fn (MessageId $id): int => $id->messageId, $result));
        Http::assertSent(fn (Request $request): bool => $request->url() === 'https://api.telegram.org/botdefault-token/forwardMessages'
            && $request['message_ids'] === [3, 8]);
    }

    public function test_telegram_error_contains_error_code_and_response_parameters(): void
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
            $this->application()->make(TelegramApiClient::class)->getMe();
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

        $client = $this->application()->make(TelegramApiClient::class);
        try {
            $client->bot('secondary')->getMe();
        } catch (TelegramException) {
        }

        self::assertSame(99, $client->getMe()->id);
    }

    public function test_command_scope_is_sent_as_an_object_not_json_string(): void
    {
        Http::fake(['*' => Http::response(['ok' => true, 'result' => []])]);

        $scope = new BotCommandScope(BotScopeType::DEFAULT);
        $this->application()->make(TelegramApiClient::class)->getMyCommands($scope);

        Http::assertSent(fn (Request $request): bool => $request['scope'] === ['type' => 'default']);
    }
}
