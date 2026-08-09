<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class SwitchInlineQueryChosenChat extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'query' => ['property' => 'query', 'type' => 'String', 'optional' => true],
        'allow_user_chats' => ['property' => 'allowUserChats', 'type' => 'Boolean', 'optional' => true],
        'allow_bot_chats' => ['property' => 'allowBotChats', 'type' => 'Boolean', 'optional' => true],
        'allow_group_chats' => ['property' => 'allowGroupChats', 'type' => 'Boolean', 'optional' => true],
        'allow_channel_chats' => ['property' => 'allowChannelChats', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly ?string $query = null,
        public readonly ?bool $allowUserChats = null,
        public readonly ?bool $allowBotChats = null,
        public readonly ?bool $allowGroupChats = null,
        public readonly ?bool $allowChannelChats = null,
    ) {}
}
