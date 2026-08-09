<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PaidMediaPreview extends PaidMedia
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'width' => ['property' => 'width', 'type' => 'Integer', 'optional' => true],
        'height' => ['property' => 'height', 'type' => 'Integer', 'optional' => true],
        'duration' => ['property' => 'duration', 'type' => 'Integer', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'preview',
    ];

    public function __construct(
        public readonly string $type,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?int $duration = null,
    ) {}
}
