<?php

declare(strict_types=1);

namespace Vbespalov\LaravelTelegram\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use Vbespalov\LaravelTelegram\LaravelData\Data;

#[MapName(SnakeCaseMapper::class)]
class RefundedPayment extends Data
{
    public function __construct(
        public string $currency,
        public int $totalAmount,
        public string $invoicePayload,
        public string $telegramPaymentChargeId,
        public string|Optional $providerPaymentChargeId,
    ) {}
}
