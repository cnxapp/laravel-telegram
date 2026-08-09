<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Location extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'latitude' => ['property' => 'latitude', 'type' => 'Float', 'optional' => false],
        'longitude' => ['property' => 'longitude', 'type' => 'Float', 'optional' => false],
        'horizontal_accuracy' => ['property' => 'horizontalAccuracy', 'type' => 'Float', 'optional' => true],
        'live_period' => ['property' => 'livePeriod', 'type' => 'Integer', 'optional' => true],
        'heading' => ['property' => 'heading', 'type' => 'Integer', 'optional' => true],
        'proximity_alert_radius' => ['property' => 'proximityAlertRadius', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly ?float $horizontalAccuracy = null,
        public readonly ?int $livePeriod = null,
        public readonly ?int $heading = null,
        public readonly ?int $proximityAlertRadius = null,
    ) {}
}
