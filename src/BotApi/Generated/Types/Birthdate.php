<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Birthdate extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'day' => ['property' => 'day', 'type' => 'Integer', 'optional' => false],
        'month' => ['property' => 'month', 'type' => 'Integer', 'optional' => false],
        'year' => ['property' => 'year', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly int $day,
        public readonly int $month,
        public readonly ?int $year = null,
    ) {}
}
