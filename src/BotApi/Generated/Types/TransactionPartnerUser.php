<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class TransactionPartnerUser extends TransactionPartner
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'transaction_type' => ['property' => 'transactionType', 'type' => 'String', 'optional' => false],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => false],
        'affiliate' => ['property' => 'affiliate', 'type' => 'AffiliateInfo', 'optional' => true],
        'invoice_payload' => ['property' => 'invoicePayload', 'type' => 'String', 'optional' => true],
        'subscription_period' => ['property' => 'subscriptionPeriod', 'type' => 'Integer', 'optional' => true],
        'paid_media' => ['property' => 'paidMedia', 'type' => 'Array of PaidMedia', 'optional' => true],
        'paid_media_payload' => ['property' => 'paidMediaPayload', 'type' => 'String', 'optional' => true],
        'gift' => ['property' => 'gift', 'type' => 'Gift', 'optional' => true],
        'premium_subscription_duration' => ['property' => 'premiumSubscriptionDuration', 'type' => 'Integer', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'user',
    ];

    /**
     * @param  list<PaidMediaLivePhoto|PaidMediaPhoto|PaidMediaPreview|PaidMediaVideo>|null  $paidMedia
     */
    public function __construct(
        public readonly string $type,
        public readonly string $transactionType,
        public readonly User $user,
        public readonly ?AffiliateInfo $affiliate = null,
        public readonly ?string $invoicePayload = null,
        public readonly ?int $subscriptionPeriod = null,
        public readonly ?array $paidMedia = null,
        public readonly ?string $paidMediaPayload = null,
        public readonly ?Gift $gift = null,
        public readonly ?int $premiumSubscriptionDuration = null,
    ) {}
}
