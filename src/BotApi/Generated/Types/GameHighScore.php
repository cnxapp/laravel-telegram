<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class GameHighScore extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'position' => ['property' => 'position', 'type' => 'Integer', 'optional' => false],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => false],
        'score' => ['property' => 'score', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int $position,
        public readonly User $user,
        public readonly int $score,
    ) {}
}
