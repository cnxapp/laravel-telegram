<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MaskPosition extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'point' => ['property' => 'point', 'type' => 'String', 'optional' => false],
        'x_shift' => ['property' => 'xShift', 'type' => 'Float', 'optional' => false],
        'y_shift' => ['property' => 'yShift', 'type' => 'Float', 'optional' => false],
        'scale' => ['property' => 'scale', 'type' => 'Float', 'optional' => false],
    ];

    public function __construct(
        public readonly string $point,
        public readonly float $xShift,
        public readonly float $yShift,
        public readonly float $scale,
    ) {}
}
