<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Tests\DTO;

use Cnx\LaravelTelegram\DTO\ChatInviteLink;
use Cnx\LaravelTelegram\DTO\InlineKeyboardButton;
use Cnx\LaravelTelegram\DTO\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\DTO\ReactionType;
use Cnx\LaravelTelegram\Enums\EmojiType;
use Cnx\LaravelTelegram\Enums\ParseMode;
use Cnx\LaravelTelegram\MessageBuilder;
use Cnx\LaravelTelegram\Tests\TestCase;

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
