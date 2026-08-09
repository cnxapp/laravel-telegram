<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class TransactionPartnerAffiliateProgram extends TransactionPartner
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'sponsor_user' => ['property' => 'sponsorUser', 'type' => 'User', 'optional' => true],
        'commission_per_mille' => ['property' => 'commissionPerMille', 'type' => 'Integer', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'affiliate_program',
    ];

    public function __construct(
        public readonly string $type,
        public readonly int $commissionPerMille,
        public readonly ?User $sponsorUser = null,
    ) {}
}
