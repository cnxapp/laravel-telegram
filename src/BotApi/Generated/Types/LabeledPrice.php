<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class LabeledPrice extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'label' => ['property' => 'label', 'type' => 'String', 'optional' => false],
        'amount' => ['property' => 'amount', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly string $label,
        public readonly int $amount,
    ) {}
}
