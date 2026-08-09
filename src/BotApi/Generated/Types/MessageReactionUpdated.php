<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MessageReactionUpdated extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => true],
        'actor_chat' => ['property' => 'actorChat', 'type' => 'Chat', 'optional' => true],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'old_reaction' => ['property' => 'oldReaction', 'type' => 'Array of ReactionType', 'optional' => false],
        'new_reaction' => ['property' => 'newReaction', 'type' => 'Array of ReactionType', 'optional' => false],
    ];

    /**
     * @param  list<ReactionTypeEmoji|ReactionTypeCustomEmoji|ReactionTypePaid>  $oldReaction
     * @param  list<ReactionTypeEmoji|ReactionTypeCustomEmoji|ReactionTypePaid>  $newReaction
     */
    public function __construct(
        public readonly Chat $chat,
        public readonly int $messageId,
        public readonly int $date,
        public readonly array $oldReaction,
        public readonly array $newReaction,
        public readonly ?User $user = null,
        public readonly ?Chat $actorChat = null,
    ) {}
}
