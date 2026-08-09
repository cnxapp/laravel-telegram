<?php

declare(strict_types=1);

namespace Vbespalov\LaravelTelegram\Tests\DTO;

use Vbespalov\LaravelTelegram\DTO\ChatInviteLink;
use Vbespalov\LaravelTelegram\DTO\InlineKeyboardButton;
use Vbespalov\LaravelTelegram\DTO\InlineKeyboardMarkup;
use Vbespalov\LaravelTelegram\DTO\ReactionType;
use Vbespalov\LaravelTelegram\Enums\EmojiType;
use Vbespalov\LaravelTelegram\Enums\ParseMode;
use Vbespalov\LaravelTelegram\MessageBuilder;
use Vbespalov\LaravelTelegram\Tests\TestCase;

class RegressionTest extends TestCase
{
    public function test_chat_invite_link_value_is_retained(): void
    {
        $invite = ChatInviteLink::from([
            'invite_link' => 'https://t.me/+example',
            'creator' => ['id' => 10, 'is_bot' => false, 'first_name' => 'Ada'],
            'creates_join_request' => false,
            'is_primary' => true,
            'is_revoked' => false,
        ]);

        self::assertSame('https://t.me/+example', $invite->inviteLink);
    }

    public function test_inline_keyboard_helper_keeps_inline_buttons(): void
    {
        $markup = InlineKeyboardMarkup::from([]);
        $button = InlineKeyboardButton::from([
            'text' => 'Confirm',
            'callback_data' => 'confirm',
        ]);

        $markup->addInlineKeyboardButtonsRow([$button, 'invalid']);

        self::assertSame([[$button]], $markup->inlineKeyboard);
    }

    public function test_paid_reaction_variant_can_be_deserialized(): void
    {
        $reaction = ReactionType::from(['type' => 'paid']);

        self::assertSame(EmojiType::PAID, $reaction->type);
    }

    public function test_message_builder_normalizes_backed_enums(): void
    {
        $params = (new MessageBuilder(10, 'Hello'))->toArray();

        self::assertSame(ParseMode::MARKDOWN->value, $params['parse_mode']);
        self::assertFalse($params['disable_notification']);
    }
}
