<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BackgroundTypePattern extends BackgroundType
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'document' => ['property' => 'document', 'type' => 'Document', 'optional' => false],
        'fill' => ['property' => 'fill', 'type' => 'BackgroundFill', 'optional' => false],
        'intensity' => ['property' => 'intensity', 'type' => 'Integer', 'optional' => false],
        'is_inverted' => ['property' => 'isInverted', 'type' => 'True', 'optional' => true],
        'is_moving' => ['property' => 'isMoving', 'type' => 'True', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'pattern',
    ];

    public function __construct(
        public readonly string $type,
        public readonly Document $document,
        public readonly BackgroundFillSolid|BackgroundFillGradient|BackgroundFillFreeformGradient $fill,
        public readonly int $intensity,
        public readonly ?bool $isInverted = null,
        public readonly ?bool $isMoving = null,
    ) {}
}
