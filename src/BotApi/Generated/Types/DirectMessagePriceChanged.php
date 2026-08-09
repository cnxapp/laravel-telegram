<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class DirectMessagePriceChanged extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'are_direct_messages_enabled' => ['property' => 'areDirectMessagesEnabled', 'type' => 'Boolean', 'optional' => false],
        'direct_message_star_count' => ['property' => 'directMessageStarCount', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly bool $areDirectMessagesEnabled,
        public readonly ?int $directMessageStarCount = null,
    ) {}
}
