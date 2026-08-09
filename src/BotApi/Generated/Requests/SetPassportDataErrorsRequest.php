<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\PassportElementErrorDataField;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PassportElementErrorFile;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PassportElementErrorFiles;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PassportElementErrorFrontSide;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PassportElementErrorReverseSide;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PassportElementErrorSelfie;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PassportElementErrorTranslationFile;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PassportElementErrorTranslationFiles;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PassportElementErrorUnspecified;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetPassportDataErrorsRequest extends Request
{
    protected const METHOD = 'setPassportDataErrors';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'errors' => ['property' => 'errors', 'type' => 'Array of PassportElementError', 'optional' => false],
    ];

    /**
     * @param  list<PassportElementErrorDataField|PassportElementErrorFrontSide|PassportElementErrorReverseSide|PassportElementErrorSelfie|PassportElementErrorFile|PassportElementErrorFiles|PassportElementErrorTranslationFile|PassportElementErrorTranslationFiles|PassportElementErrorUnspecified>  $errors
     */
    public function __construct(
        public readonly int $userId,
        public readonly array $errors,
    ) {}
}
