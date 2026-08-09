<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ReactionCount extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'ReactionType', 'optional' => false],
        'total_count' => ['property' => 'totalCount', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly ReactionTypeEmoji|ReactionTypeCustomEmoji|ReactionTypePaid $type,
        public readonly int $totalCount,
    ) {}
}
