<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetMyNameRequest extends Request
{
    protected const METHOD = 'getMyName';

    protected const RETURN_TYPE = 'BotName';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'language_code' => ['property' => 'languageCode', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly ?string $languageCode = null,
    ) {}
}
