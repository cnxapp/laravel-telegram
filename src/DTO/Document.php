<?php

namespace Vbespalov\LaravelTelegram\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use Vbespalov\LaravelTelegram\LaravelData\Data;

#[MapName(SnakeCaseMapper::class)]
class Document extends Data
{
    /**
     * This object represents a general file (as opposed to photos, voice messages and audio files).
     *
     * @link https://core.telegram.org/bots/api#document
     */
    public function __construct(
        public string $fileId,
        public string $fileUniqueId,
        public PhotoSize|Optional $thumbnail,
        public string|Optional $fileName,
        public string|Optional $mimeType,
        public int|Optional $fileSize,
    ) {}
}
