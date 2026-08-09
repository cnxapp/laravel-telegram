<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class AffiliateInfo extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'affiliate_user' => ['property' => 'affiliateUser', 'type' => 'User', 'optional' => true],
        'affiliate_chat' => ['property' => 'affiliateChat', 'type' => 'Chat', 'optional' => true],
        'commission_per_mille' => ['property' => 'commissionPerMille', 'type' => 'Integer', 'optional' => false],
        'amount' => ['property' => 'amount', 'type' => 'Integer', 'optional' => false],
        'nanostar_amount' => ['property' => 'nanostarAmount', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly int $commissionPerMille,
        public readonly int $amount,
        public readonly ?User $affiliateUser = null,
        public readonly ?Chat $affiliateChat = null,
        public readonly ?int $nanostarAmount = null,
    ) {}
}
