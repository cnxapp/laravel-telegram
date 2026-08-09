<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatBoostAdded extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'boost_count' => ['property' => 'boostCount', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int $boostCount,
    ) {}
}
