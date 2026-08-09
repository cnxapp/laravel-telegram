<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetMyShortDescriptionRequest extends Request
{
    protected const METHOD = 'setMyShortDescription';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'short_description' => ['property' => 'shortDescription', 'type' => 'String', 'optional' => true],
        'language_code' => ['property' => 'languageCode', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly ?string $shortDescription = null,
        public readonly ?string $languageCode = null,
    ) {}
}
