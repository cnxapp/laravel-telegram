<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Venue extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'location' => ['property' => 'location', 'type' => 'Location', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'address' => ['property' => 'address', 'type' => 'String', 'optional' => false],
        'foursquare_id' => ['property' => 'foursquareId', 'type' => 'String', 'optional' => true],
        'foursquare_type' => ['property' => 'foursquareType', 'type' => 'String', 'optional' => true],
        'google_place_id' => ['property' => 'googlePlaceId', 'type' => 'String', 'optional' => true],
        'google_place_type' => ['property' => 'googlePlaceType', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly Location $location,
        public readonly string $title,
        public readonly string $address,
        public readonly ?string $foursquareId = null,
        public readonly ?string $foursquareType = null,
        public readonly ?string $googlePlaceId = null,
        public readonly ?string $googlePlaceType = null,
    ) {}
}
