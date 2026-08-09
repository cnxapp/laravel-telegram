<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineQueryResultsButton extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'web_app' => ['property' => 'webApp', 'type' => 'WebAppInfo', 'optional' => true],
        'start_parameter' => ['property' => 'startParameter', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly string $text,
        public readonly ?WebAppInfo $webApp = null,
        public readonly ?string $startParameter = null,
    ) {}
}
