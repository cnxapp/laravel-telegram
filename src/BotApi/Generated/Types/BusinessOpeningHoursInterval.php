<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BusinessOpeningHoursInterval extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'opening_minute' => ['property' => 'openingMinute', 'type' => 'Integer', 'optional' => false],
        'closing_minute' => ['property' => 'closingMinute', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int $openingMinute,
        public readonly int $closingMinute,
    ) {}
}
