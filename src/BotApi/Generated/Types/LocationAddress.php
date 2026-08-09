<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class LocationAddress extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'country_code' => ['property' => 'countryCode', 'type' => 'String', 'optional' => false],
        'state' => ['property' => 'state', 'type' => 'String', 'optional' => true],
        'city' => ['property' => 'city', 'type' => 'String', 'optional' => true],
        'street' => ['property' => 'street', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly string $countryCode,
        public readonly ?string $state = null,
        public readonly ?string $city = null,
        public readonly ?string $street = null,
    ) {}
}
