<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class OrderInfo extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => true],
        'phone_number' => ['property' => 'phoneNumber', 'type' => 'String', 'optional' => true],
        'email' => ['property' => 'email', 'type' => 'String', 'optional' => true],
        'shipping_address' => ['property' => 'shippingAddress', 'type' => 'ShippingAddress', 'optional' => true],
    ];

    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $email = null,
        public readonly ?ShippingAddress $shippingAddress = null,
    ) {}
}
