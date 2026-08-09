<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class TransactionPartner extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        TransactionPartnerUser::class,
        TransactionPartnerChat::class,
        TransactionPartnerAffiliateProgram::class,
        TransactionPartnerFragment::class,
        TransactionPartnerTelegramAds::class,
        TransactionPartnerTelegramApi::class,
        TransactionPartnerOther::class,
    ];
}
