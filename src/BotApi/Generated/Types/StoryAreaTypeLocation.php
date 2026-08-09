<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class StoryAreaTypeLocation extends StoryAreaType
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'latitude' => ['property' => 'latitude', 'type' => 'Float', 'optional' => false],
        'longitude' => ['property' => 'longitude', 'type' => 'Float', 'optional' => false],
        'address' => ['property' => 'address', 'type' => 'LocationAddress', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'location',
    ];

    public function __construct(
        public readonly string $type,
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly ?LocationAddress $address = null,
    ) {}
}
