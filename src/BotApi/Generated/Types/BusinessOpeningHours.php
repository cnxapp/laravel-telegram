<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BusinessOpeningHours extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'time_zone_name' => ['property' => 'timeZoneName', 'type' => 'String', 'optional' => false],
        'opening_hours' => ['property' => 'openingHours', 'type' => 'Array of BusinessOpeningHoursInterval', 'optional' => false],
    ];

    /**
     * @param  list<BusinessOpeningHoursInterval>  $openingHours
     */
    public function __construct(
        public readonly string $timeZoneName,
        public readonly array $openingHours,
    ) {}
}
