<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class PaidMedia extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        PaidMediaLivePhoto::class,
        PaidMediaPhoto::class,
        PaidMediaPreview::class,
        PaidMediaVideo::class,
    ];
}
