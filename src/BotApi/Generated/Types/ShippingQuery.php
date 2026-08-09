<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ShippingQuery extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'from' => ['property' => 'from', 'type' => 'User', 'optional' => false],
        'invoice_payload' => ['property' => 'invoicePayload', 'type' => 'String', 'optional' => false],
        'shipping_address' => ['property' => 'shippingAddress', 'type' => 'ShippingAddress', 'optional' => false],
    ];

    public function __construct(
        public readonly string $id,
        public readonly User $from,
        public readonly string $invoicePayload,
        public readonly ShippingAddress $shippingAddress,
    ) {}
}
