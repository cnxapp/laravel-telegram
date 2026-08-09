<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class StoryAreaTypeSuggestedReaction extends StoryAreaType
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'reaction_type' => ['property' => 'reactionType', 'type' => 'ReactionType', 'optional' => false],
        'is_dark' => ['property' => 'isDark', 'type' => 'Boolean', 'optional' => true],
        'is_flipped' => ['property' => 'isFlipped', 'type' => 'Boolean', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'suggested_reaction',
    ];

    public function __construct(
        public readonly string $type,
        public readonly ReactionTypeEmoji|ReactionTypeCustomEmoji|ReactionTypePaid $reactionType,
        public readonly ?bool $isDark = null,
        public readonly ?bool $isFlipped = null,
    ) {}
}
