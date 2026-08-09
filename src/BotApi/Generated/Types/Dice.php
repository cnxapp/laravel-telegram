<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Dice extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'emoji' => ['property' => 'emoji', 'type' => 'String', 'optional' => false],
        'value' => ['property' => 'value', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly string $emoji,
        public readonly int $value,
    ) {}
}
