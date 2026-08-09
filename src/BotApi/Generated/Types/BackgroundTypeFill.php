<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BackgroundTypeFill extends BackgroundType
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'fill' => ['property' => 'fill', 'type' => 'BackgroundFill', 'optional' => false],
        'dark_theme_dimming' => ['property' => 'darkThemeDimming', 'type' => 'Integer', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'fill',
    ];

    public function __construct(
        public readonly string $type,
        public readonly BackgroundFillSolid|BackgroundFillGradient|BackgroundFillFreeformGradient $fill,
        public readonly int $darkThemeDimming,
    ) {}
}
