<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputPaidMediaVideo extends InputPaidMedia
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'media' => ['property' => 'media', 'type' => 'String', 'optional' => false],
        'thumbnail' => ['property' => 'thumbnail', 'type' => 'String', 'optional' => true],
        'cover' => ['property' => 'cover', 'type' => 'String', 'optional' => true],
        'start_timestamp' => ['property' => 'startTimestamp', 'type' => 'Integer', 'optional' => true],
        'width' => ['property' => 'width', 'type' => 'Integer', 'optional' => true],
        'height' => ['property' => 'height', 'type' => 'Integer', 'optional' => true],
        'duration' => ['property' => 'duration', 'type' => 'Integer', 'optional' => true],
        'supports_streaming' => ['property' => 'supportsStreaming', 'type' => 'Boolean', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'video',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string|InputFile $media,
        public readonly string|InputFile|null $thumbnail = null,
        public readonly string|InputFile|null $cover = null,
        public readonly ?int $startTimestamp = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?int $duration = null,
        public readonly ?bool $supportsStreaming = null,
    ) {}
}
