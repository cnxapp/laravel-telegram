<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class InputMessageContent extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        InputTextMessageContent::class,
        InputRichMessageContent::class,
        InputLocationMessageContent::class,
        InputVenueMessageContent::class,
        InputContactMessageContent::class,
        InputInvoiceMessageContent::class,
    ];
}
