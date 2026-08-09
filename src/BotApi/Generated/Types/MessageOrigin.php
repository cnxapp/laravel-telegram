<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class MessageOrigin extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        MessageOriginUser::class,
        MessageOriginHiddenUser::class,
        MessageOriginChat::class,
        MessageOriginChannel::class,
    ];
}
