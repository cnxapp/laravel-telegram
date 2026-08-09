<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class PassportElementError extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        PassportElementErrorDataField::class,
        PassportElementErrorFrontSide::class,
        PassportElementErrorReverseSide::class,
        PassportElementErrorSelfie::class,
        PassportElementErrorFile::class,
        PassportElementErrorFiles::class,
        PassportElementErrorTranslationFile::class,
        PassportElementErrorTranslationFiles::class,
        PassportElementErrorUnspecified::class,
    ];
}
