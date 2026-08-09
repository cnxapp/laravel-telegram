<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class StoryAreaPosition extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'x_percentage' => ['property' => 'xPercentage', 'type' => 'Float', 'optional' => false],
        'y_percentage' => ['property' => 'yPercentage', 'type' => 'Float', 'optional' => false],
        'width_percentage' => ['property' => 'widthPercentage', 'type' => 'Float', 'optional' => false],
        'height_percentage' => ['property' => 'heightPercentage', 'type' => 'Float', 'optional' => false],
        'rotation_angle' => ['property' => 'rotationAngle', 'type' => 'Float', 'optional' => false],
        'corner_radius_percentage' => ['property' => 'cornerRadiusPercentage', 'type' => 'Float', 'optional' => false],
    ];

    public function __construct(
        public readonly float $xPercentage,
        public readonly float $yPercentage,
        public readonly float $widthPercentage,
        public readonly float $heightPercentage,
        public readonly float $rotationAngle,
        public readonly float $cornerRadiusPercentage,
    ) {}
}
