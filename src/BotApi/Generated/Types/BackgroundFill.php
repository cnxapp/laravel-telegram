<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class BackgroundFill extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        BackgroundFillSolid::class,
        BackgroundFillGradient::class,
        BackgroundFillFreeformGradient::class,
    ];
}
