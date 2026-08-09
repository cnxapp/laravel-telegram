<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class KeyboardButton extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'icon_custom_emoji_id' => ['property' => 'iconCustomEmojiId', 'type' => 'String', 'optional' => true],
        'style' => ['property' => 'style', 'type' => 'String', 'optional' => true],
        'request_users' => ['property' => 'requestUsers', 'type' => 'KeyboardButtonRequestUsers', 'optional' => true],
        'request_chat' => ['property' => 'requestChat', 'type' => 'KeyboardButtonRequestChat', 'optional' => true],
        'request_managed_bot' => ['property' => 'requestManagedBot', 'type' => 'KeyboardButtonRequestManagedBot', 'optional' => true],
        'request_contact' => ['property' => 'requestContact', 'type' => 'Boolean', 'optional' => true],
        'request_location' => ['property' => 'requestLocation', 'type' => 'Boolean', 'optional' => true],
        'request_poll' => ['property' => 'requestPoll', 'type' => 'KeyboardButtonPollType', 'optional' => true],
        'web_app' => ['property' => 'webApp', 'type' => 'WebAppInfo', 'optional' => true],
    ];

    public function __construct(
        public readonly string $text,
        public readonly ?string $iconCustomEmojiId = null,
        public readonly ?string $style = null,
        public readonly ?KeyboardButtonRequestUsers $requestUsers = null,
        public readonly ?KeyboardButtonRequestChat $requestChat = null,
        public readonly ?KeyboardButtonRequestManagedBot $requestManagedBot = null,
        public readonly ?bool $requestContact = null,
        public readonly ?bool $requestLocation = null,
        public readonly ?KeyboardButtonPollType $requestPoll = null,
        public readonly ?WebAppInfo $webApp = null,
    ) {}
}
