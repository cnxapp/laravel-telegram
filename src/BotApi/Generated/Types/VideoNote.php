<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class VideoNote extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'file_id' => ['property' => 'fileId', 'type' => 'String', 'optional' => false],
        'file_unique_id' => ['property' => 'fileUniqueId', 'type' => 'String', 'optional' => false],
        'length' => ['property' => 'length', 'type' => 'Integer', 'optional' => false],
        'duration' => ['property' => 'duration', 'type' => 'Integer', 'optional' => false],
        'thumbnail' => ['property' => 'thumbnail', 'type' => 'PhotoSize', 'optional' => true],
        'file_size' => ['property' => 'fileSize', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly string $fileId,
        public readonly string $fileUniqueId,
        public readonly int $length,
        public readonly int $duration,
        public readonly ?PhotoSize $thumbnail = null,
        public readonly ?int $fileSize = null,
    ) {}
}
