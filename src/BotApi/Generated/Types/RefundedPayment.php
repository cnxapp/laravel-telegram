<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class RefundedPayment extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'currency' => ['property' => 'currency', 'type' => 'String', 'optional' => false],
        'total_amount' => ['property' => 'totalAmount', 'type' => 'Integer', 'optional' => false],
        'invoice_payload' => ['property' => 'invoicePayload', 'type' => 'String', 'optional' => false],
        'telegram_payment_charge_id' => ['property' => 'telegramPaymentChargeId', 'type' => 'String', 'optional' => false],
        'provider_payment_charge_id' => ['property' => 'providerPaymentChargeId', 'type' => 'String', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'currency' => 'XTR',
    ];

    public function __construct(
        public readonly string $currency,
        public readonly int $totalAmount,
        public readonly string $invoicePayload,
        public readonly string $telegramPaymentChargeId,
        public readonly ?string $providerPaymentChargeId = null,
    ) {}
}
