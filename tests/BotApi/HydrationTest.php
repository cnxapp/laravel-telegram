<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Tests\BotApi;

use Cnx\LaravelTelegram\BotApi\Generated\Requests\SendRichMessageRequest;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatMember;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatMemberOwner;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputRichMessage;
use Cnx\LaravelTelegram\BotApi\Generated\Types\Update;
use Cnx\LaravelTelegram\BotApi\Generated\Types\User;
use Cnx\LaravelTelegram\Tests\TestCase;

class HydrationTest extends TestCase
{
    public function test_it_hydrates_new_bot_api_10_2_fields(): void
    {
        $user = User::from([
            'id' => 42,
            'is_bot' => true,
            'first_name' => 'Agent',
            'supports_guest_queries' => true,
            'supports_join_request_queries' => true,
        ]);

        self::assertTrue($user->supportsGuestQueries);
        self::assertTrue($user->supportsJoinRequestQueries);
    }

    public function test_it_resolves_tagged_unions(): void
    {
        $member = ChatMember::from([
            'status' => 'creator',
            'user' => ['id' => 42, 'is_bot' => false, 'first_name' => 'Owner'],
            'is_anonymous' => false,
        ]);

        self::assertInstanceOf(ChatMemberOwner::class, $member);
        self::assertSame('Owner', $member->user->firstName);
    }

    public function test_it_hydrates_guest_updates(): void
    {
        $update = Update::from([
            'update_id' => 100,
            'guest_message' => [
                'message_id' => 5,
                'date' => 1_725_000_000,
                'chat' => ['id' => 99, 'type' => 'private'],
                'guest_query_id' => 'guest-query',
            ],
        ]);

        self::assertSame('guest-query', $update->guestMessage?->guestQueryId);
    }

    public function test_rich_message_request_serializes_to_telegram_names(): void
    {
        $request = new SendRichMessageRequest(
            chatId: 42,
            richMessage: new InputRichMessage(markdown: '**Hello**'),
            disableNotification: false,
        );

        self::assertSame([
            'chat_id' => 42,
            'rich_message' => ['markdown' => '**Hello**'],
            'disable_notification' => false,
        ], $request->toArray());
    }
}
