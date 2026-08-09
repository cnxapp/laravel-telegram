<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MessageReactionCountUpdated extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'reactions' => ['property' => 'reactions', 'type' => 'Array of ReactionCount', 'optional' => false],
    ];

    /**
     * @param  list<ReactionCount>  $reactions
     */
    public function __construct(
        public readonly Chat $chat,
        public readonly int $messageId,
        public readonly int $date,
        public readonly array $reactions,
    ) {}
}
