<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetMyNameRequest extends Request
{
    protected const METHOD = 'setMyName';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => true],
        'language_code' => ['property' => 'languageCode', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $languageCode = null,
    ) {}
}
