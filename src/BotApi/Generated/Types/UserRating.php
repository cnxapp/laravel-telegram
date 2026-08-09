<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class UserRating extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'level' => ['property' => 'level', 'type' => 'Integer', 'optional' => false],
        'rating' => ['property' => 'rating', 'type' => 'Integer', 'optional' => false],
        'current_level_rating' => ['property' => 'currentLevelRating', 'type' => 'Integer', 'optional' => false],
        'next_level_rating' => ['property' => 'nextLevelRating', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly int $level,
        public readonly int $rating,
        public readonly int $currentLevelRating,
        public readonly ?int $nextLevelRating = null,
    ) {}
}
