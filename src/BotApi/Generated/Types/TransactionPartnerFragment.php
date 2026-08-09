<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class TransactionPartnerFragment extends TransactionPartner
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'withdrawal_state' => ['property' => 'withdrawalState', 'type' => 'RevenueWithdrawalState', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'fragment',
    ];

    public function __construct(
        public readonly string $type,
        public readonly RevenueWithdrawalStatePending|RevenueWithdrawalStateSucceeded|RevenueWithdrawalStateFailed|null $withdrawalState = null,
    ) {}
}
