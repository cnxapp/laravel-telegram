<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class StarAmount extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'amount' => ['property' => 'amount', 'type' => 'Integer', 'optional' => false],
        'nanostar_amount' => ['property' => 'nanostarAmount', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly int $amount,
        public readonly ?int $nanostarAmount = null,
    ) {}
}
