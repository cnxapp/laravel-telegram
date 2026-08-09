<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BackgroundFillGradient extends BackgroundFill
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'top_color' => ['property' => 'topColor', 'type' => 'Integer', 'optional' => false],
        'bottom_color' => ['property' => 'bottomColor', 'type' => 'Integer', 'optional' => false],
        'rotation_angle' => ['property' => 'rotationAngle', 'type' => 'Integer', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'gradient',
    ];

    public function __construct(
        public readonly string $type,
        public readonly int $topColor,
        public readonly int $bottomColor,
        public readonly int $rotationAngle,
    ) {}
}
