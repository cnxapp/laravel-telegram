<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class StarTransaction extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'amount' => ['property' => 'amount', 'type' => 'Integer', 'optional' => false],
        'nanostar_amount' => ['property' => 'nanostarAmount', 'type' => 'Integer', 'optional' => true],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'source' => ['property' => 'source', 'type' => 'TransactionPartner', 'optional' => true],
        'receiver' => ['property' => 'receiver', 'type' => 'TransactionPartner', 'optional' => true],
    ];

    public function __construct(
        public readonly string $id,
        public readonly int $amount,
        public readonly int $date,
        public readonly ?int $nanostarAmount = null,
        public readonly TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther|null $source = null,
        public readonly TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther|null $receiver = null,
    ) {}
}
