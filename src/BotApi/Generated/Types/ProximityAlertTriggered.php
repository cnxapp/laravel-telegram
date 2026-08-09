<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ProximityAlertTriggered extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'traveler' => ['property' => 'traveler', 'type' => 'User', 'optional' => false],
        'watcher' => ['property' => 'watcher', 'type' => 'User', 'optional' => false],
        'distance' => ['property' => 'distance', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly User $traveler,
        public readonly User $watcher,
        public readonly int $distance,
    ) {}
}
