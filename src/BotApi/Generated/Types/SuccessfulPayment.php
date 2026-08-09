<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class SuccessfulPayment extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'currency' => ['property' => 'currency', 'type' => 'String', 'optional' => false],
        'total_amount' => ['property' => 'totalAmount', 'type' => 'Integer', 'optional' => false],
        'invoice_payload' => ['property' => 'invoicePayload', 'type' => 'String', 'optional' => false],
        'subscription_expiration_date' => ['property' => 'subscriptionExpirationDate', 'type' => 'Integer', 'optional' => true],
        'is_recurring' => ['property' => 'isRecurring', 'type' => 'True', 'optional' => true],
        'is_first_recurring' => ['property' => 'isFirstRecurring', 'type' => 'True', 'optional' => true],
        'shipping_option_id' => ['property' => 'shippingOptionId', 'type' => 'String', 'optional' => true],
        'order_info' => ['property' => 'orderInfo', 'type' => 'OrderInfo', 'optional' => true],
        'telegram_payment_charge_id' => ['property' => 'telegramPaymentChargeId', 'type' => 'String', 'optional' => false],
        'provider_payment_charge_id' => ['property' => 'providerPaymentChargeId', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $currency,
        public readonly int $totalAmount,
        public readonly string $invoicePayload,
        public readonly string $telegramPaymentChargeId,
        public readonly string $providerPaymentChargeId,
        public readonly ?int $subscriptionExpirationDate = null,
        public readonly ?bool $isRecurring = null,
        public readonly ?bool $isFirstRecurring = null,
        public readonly ?string $shippingOptionId = null,
        public readonly ?OrderInfo $orderInfo = null,
    ) {}
}
