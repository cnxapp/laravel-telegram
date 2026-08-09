<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Video extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'file_id' => ['property' => 'fileId', 'type' => 'String', 'optional' => false],
        'file_unique_id' => ['property' => 'fileUniqueId', 'type' => 'String', 'optional' => false],
        'width' => ['property' => 'width', 'type' => 'Integer', 'optional' => false],
        'height' => ['property' => 'height', 'type' => 'Integer', 'optional' => false],
        'duration' => ['property' => 'duration', 'type' => 'Integer', 'optional' => false],
        'thumbnail' => ['property' => 'thumbnail', 'type' => 'PhotoSize', 'optional' => true],
        'cover' => ['property' => 'cover', 'type' => 'Array of PhotoSize', 'optional' => true],
        'start_timestamp' => ['property' => 'startTimestamp', 'type' => 'Integer', 'optional' => true],
        'qualities' => ['property' => 'qualities', 'type' => 'Array of VideoQuality', 'optional' => true],
        'file_name' => ['property' => 'fileName', 'type' => 'String', 'optional' => true],
        'mime_type' => ['property' => 'mimeType', 'type' => 'String', 'optional' => true],
        'file_size' => ['property' => 'fileSize', 'type' => 'Integer', 'optional' => true],
    ];

    /**
     * @param  list<PhotoSize>|null  $cover
     * @param  list<VideoQuality>|null  $qualities
     */
    public function __construct(
        public readonly string $fileId,
        public readonly string $fileUniqueId,
        public readonly int $width,
        public readonly int $height,
        public readonly int $duration,
        public readonly ?PhotoSize $thumbnail = null,
        public readonly ?array $cover = null,
        public readonly ?int $startTimestamp = null,
        public readonly ?array $qualities = null,
        public readonly ?string $fileName = null,
        public readonly ?string $mimeType = null,
        public readonly ?int $fileSize = null,
    ) {}
}
