<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputMediaVenue extends InputPollMedia
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'latitude' => ['property' => 'latitude', 'type' => 'Float', 'optional' => false],
        'longitude' => ['property' => 'longitude', 'type' => 'Float', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'address' => ['property' => 'address', 'type' => 'String', 'optional' => false],
        'foursquare_id' => ['property' => 'foursquareId', 'type' => 'String', 'optional' => true],
        'foursquare_type' => ['property' => 'foursquareType', 'type' => 'String', 'optional' => true],
        'google_place_id' => ['property' => 'googlePlaceId', 'type' => 'String', 'optional' => true],
        'google_place_type' => ['property' => 'googlePlaceType', 'type' => 'String', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'venue',
    ];

    public function __construct(
        public readonly string $type,
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly string $title,
        public readonly string $address,
        public readonly ?string $foursquareId = null,
        public readonly ?string $foursquareType = null,
        public readonly ?string $googlePlaceId = null,
        public readonly ?string $googlePlaceType = null,
    ) {}
}
