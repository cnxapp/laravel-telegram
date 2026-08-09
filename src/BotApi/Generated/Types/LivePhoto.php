<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class LivePhoto extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'photo' => ['property' => 'photo', 'type' => 'Array of PhotoSize', 'optional' => true],
        'file_id' => ['property' => 'fileId', 'type' => 'String', 'optional' => false],
        'file_unique_id' => ['property' => 'fileUniqueId', 'type' => 'String', 'optional' => false],
        'width' => ['property' => 'width', 'type' => 'Integer', 'optional' => false],
        'height' => ['property' => 'height', 'type' => 'Integer', 'optional' => false],
        'duration' => ['property' => 'duration', 'type' => 'Integer', 'optional' => false],
        'mime_type' => ['property' => 'mimeType', 'type' => 'String', 'optional' => true],
        'file_size' => ['property' => 'fileSize', 'type' => 'Integer', 'optional' => true],
    ];

    /**
     * @param  list<PhotoSize>|null  $photo
     */
    public function __construct(
        public readonly string $fileId,
        public readonly string $fileUniqueId,
        public readonly int $width,
        public readonly int $height,
        public readonly int $duration,
        public readonly ?array $photo = null,
        public readonly ?string $mimeType = null,
        public readonly ?int $fileSize = null,
    ) {}
}
