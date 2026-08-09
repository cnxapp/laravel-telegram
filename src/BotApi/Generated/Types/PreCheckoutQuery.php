<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PreCheckoutQuery extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'from' => ['property' => 'from', 'type' => 'User', 'optional' => false],
        'currency' => ['property' => 'currency', 'type' => 'String', 'optional' => false],
        'total_amount' => ['property' => 'totalAmount', 'type' => 'Integer', 'optional' => false],
        'invoice_payload' => ['property' => 'invoicePayload', 'type' => 'String', 'optional' => false],
        'shipping_option_id' => ['property' => 'shippingOptionId', 'type' => 'String', 'optional' => true],
        'order_info' => ['property' => 'orderInfo', 'type' => 'OrderInfo', 'optional' => true],
    ];

    public function __construct(
        public readonly string $id,
        public readonly User $from,
        public readonly string $currency,
        public readonly int $totalAmount,
        public readonly string $invoicePayload,
        public readonly ?string $shippingOptionId = null,
        public readonly ?OrderInfo $orderInfo = null,
    ) {}
}
