<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Invoice extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'description' => ['property' => 'description', 'type' => 'String', 'optional' => false],
        'start_parameter' => ['property' => 'startParameter', 'type' => 'String', 'optional' => false],
        'currency' => ['property' => 'currency', 'type' => 'String', 'optional' => false],
        'total_amount' => ['property' => 'totalAmount', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly string $startParameter,
        public readonly string $currency,
        public readonly int $totalAmount,
    ) {}
}
