<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Tests\DTO;

use Carbon\Carbon;
use Cnx\LaravelTelegram\DTO\BotSubscriptionUpdated;
use Cnx\LaravelTelegram\DTO\CallbackQuery;
use Cnx\LaravelTelegram\DTO\ChatBoostRemoved;
use Cnx\LaravelTelegram\DTO\ChatMember;
use Cnx\LaravelTelegram\DTO\ForumTopicClosed;
use Cnx\LaravelTelegram\DTO\GiveawayCreated;
use Cnx\LaravelTelegram\DTO\ManagedBotUpdated;
use Cnx\LaravelTelegram\DTO\Message;
use Cnx\LaravelTelegram\DTO\PaidMediaInfo;
use Cnx\LaravelTelegram\DTO\PaidMediaPurchased;
use Cnx\LaravelTelegram\DTO\Update;
use Cnx\LaravelTelegram\DTO\VideoChatStarted;
use Cnx\LaravelTelegram\Tests\TestCase;
use Spatie\LaravelData\Optional;

class UpdateTest extends TestCase
{
    public function test_it_maps_all_current_top_level_update_dtos(): void
    {
        $update = Update::from([
            'update_id' => 42,
            'removed_chat_boost' => [
                'chat' => ['id' => -1001, 'type' => 'supergroup'],
                'boost_id' => 'boost-1',
                'remove_date' => 1_720_000_000,
                'source' => [
                    'source' => 'premium',
                    'user' => ['id' => 10, 'is_bot' => false, 'first_name' => 'Ada'],
                ],
            ],
            'purchased_paid_media' => [
                'from' => ['id' => 11, 'is_bot' => false, 'first_name' => 'Grace'],
                'paid_media_payload' => 'invoice-1',
            ],
            'managed_bot' => [
                'user' => ['id' => 12, 'is_bot' => false, 'first_name' => 'Owner'],
                'bot' => ['id' => 13, 'is_bot' => true, 'first_name' => 'Worker'],
            ],
            'subscription' => [
                'user' => ['id' => 14, 'is_bot' => false, 'first_name' => 'Subscriber'],
                'invoice_payload' => 'subscription-1',
                'state' => 'active',
            ],
        ]);

        self::assertInstanceOf(ChatBoostRemoved::class, $update->removedChatBoost);
        self::assertInstanceOf(Carbon::class, $update->removedChatBoost->removeDate);
        self::assertInstanceOf(PaidMediaPurchased::class, $update->purchasedPaidMedia);
        self::assertInstanceOf(ManagedBotUpdated::class, $update->managedBot);
        self::assertInstanceOf(BotSubscriptionUpdated::class, $update->subscription);
    }

    public function test_it_maps_service_objects_to_dtos_instead_of_raw_arrays(): void
    {
        $message = Message::from([
            'message_id' => 7,
            'date' => 1_720_000_000,
            'chat' => ['id' => 10, 'type' => 'private'],
            'forum_topic_closed' => [],
            'giveaway_created' => ['prize_star_count' => 100],
            'video_chat_started' => [],
            'paid_media' => [
                'star_count' => 25,
                'paid_media' => [['type' => 'preview', 'width' => 800, 'height' => 600]],
            ],
        ]);

        self::assertInstanceOf(ForumTopicClosed::class, $message->forumTopicClosed);
        self::assertInstanceOf(GiveawayCreated::class, $message->giveawayCreated);
        self::assertSame(100, $message->giveawayCreated->prizeStarCount);
        self::assertInstanceOf(VideoChatStarted::class, $message->videoChatStarted);
        self::assertInstanceOf(PaidMediaInfo::class, $message->paidMedia);
        self::assertSame('preview', $message->paidMedia->paidMedia[0]->type);
    }

    public function test_callback_query_message_is_optional_and_chat_instance_is_required(): void
    {
        $query = CallbackQuery::from([
            'id' => 'callback-1',
            'from' => ['id' => 10, 'is_bot' => false, 'first_name' => 'Ada'],
            'inline_message_id' => 'inline-1',
            'chat_instance' => 'chat-instance-1',
            'data' => 'confirm',
        ]);

        self::assertInstanceOf(Optional::class, $query->message);
        self::assertSame('chat-instance-1', $query->chatInstance);
    }

    public function test_chat_member_maps_can_add_web_page_previews(): void
    {
        $member = ChatMember::from([
            'status' => 'restricted',
            'user' => ['id' => 10, 'is_bot' => false, 'first_name' => 'Ada'],
            'can_add_web_page_previews' => true,
        ]);

        self::assertTrue($member->canAddWebPagePreviews);
    }
}
