<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineKeyboardButton extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'icon_custom_emoji_id' => ['property' => 'iconCustomEmojiId', 'type' => 'String', 'optional' => true],
        'style' => ['property' => 'style', 'type' => 'String', 'optional' => true],
        'url' => ['property' => 'url', 'type' => 'String', 'optional' => true],
        'callback_data' => ['property' => 'callbackData', 'type' => 'String', 'optional' => true],
        'web_app' => ['property' => 'webApp', 'type' => 'WebAppInfo', 'optional' => true],
        'login_url' => ['property' => 'loginUrl', 'type' => 'LoginUrl', 'optional' => true],
        'switch_inline_query' => ['property' => 'switchInlineQuery', 'type' => 'String', 'optional' => true],
        'switch_inline_query_current_chat' => ['property' => 'switchInlineQueryCurrentChat', 'type' => 'String', 'optional' => true],
        'switch_inline_query_chosen_chat' => ['property' => 'switchInlineQueryChosenChat', 'type' => 'SwitchInlineQueryChosenChat', 'optional' => true],
        'copy_text' => ['property' => 'copyText', 'type' => 'CopyTextButton', 'optional' => true],
        'callback_game' => ['property' => 'callbackGame', 'type' => 'CallbackGame', 'optional' => true],
        'pay' => ['property' => 'pay', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly string $text,
        public readonly ?string $iconCustomEmojiId = null,
        public readonly ?string $style = null,
        public readonly ?string $url = null,
        public readonly ?string $callbackData = null,
        public readonly ?WebAppInfo $webApp = null,
        public readonly ?LoginUrl $loginUrl = null,
        public readonly ?string $switchInlineQuery = null,
        public readonly ?string $switchInlineQueryCurrentChat = null,
        public readonly ?SwitchInlineQueryChosenChat $switchInlineQueryChosenChat = null,
        public readonly ?CopyTextButton $copyText = null,
        public readonly ?CallbackGame $callbackGame = null,
        public readonly ?bool $pay = null,
    ) {}
}
