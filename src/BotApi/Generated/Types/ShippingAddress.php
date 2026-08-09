<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ShippingAddress extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'country_code' => ['property' => 'countryCode', 'type' => 'String', 'optional' => false],
        'state' => ['property' => 'state', 'type' => 'String', 'optional' => false],
        'city' => ['property' => 'city', 'type' => 'String', 'optional' => false],
        'street_line1' => ['property' => 'streetLine1', 'type' => 'String', 'optional' => false],
        'street_line2' => ['property' => 'streetLine2', 'type' => 'String', 'optional' => false],
        'post_code' => ['property' => 'postCode', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $countryCode,
        public readonly string $state,
        public readonly string $city,
        public readonly string $streetLine1,
        public readonly string $streetLine2,
        public readonly string $postCode,
    ) {}
}
