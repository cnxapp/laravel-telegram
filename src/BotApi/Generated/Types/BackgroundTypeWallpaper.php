<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BackgroundTypeWallpaper extends BackgroundType
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'document' => ['property' => 'document', 'type' => 'Document', 'optional' => false],
        'dark_theme_dimming' => ['property' => 'darkThemeDimming', 'type' => 'Integer', 'optional' => false],
        'is_blurred' => ['property' => 'isBlurred', 'type' => 'True', 'optional' => true],
        'is_moving' => ['property' => 'isMoving', 'type' => 'True', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'wallpaper',
    ];

    public function __construct(
        public readonly string $type,
        public readonly Document $document,
        public readonly int $darkThemeDimming,
        public readonly ?bool $isBlurred = null,
        public readonly ?bool $isMoving = null,
    ) {}
}
