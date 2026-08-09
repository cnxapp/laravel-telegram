<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class WebAppData extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'data' => ['property' => 'data', 'type' => 'String', 'optional' => false],
        'button_text' => ['property' => 'buttonText', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $data,
        public readonly string $buttonText,
    ) {}
}
