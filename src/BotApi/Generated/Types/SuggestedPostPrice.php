<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class SuggestedPostPrice extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'currency' => ['property' => 'currency', 'type' => 'String', 'optional' => false],
        'amount' => ['property' => 'amount', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly string $currency,
        public readonly int $amount,
    ) {}
}
