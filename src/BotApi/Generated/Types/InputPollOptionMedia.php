<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class InputPollOptionMedia extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        InputMediaAnimation::class,
        InputMediaLink::class,
        InputMediaLivePhoto::class,
        InputMediaLocation::class,
        InputMediaPhoto::class,
        InputMediaSticker::class,
        InputMediaVenue::class,
        InputMediaVideo::class,
    ];
}
