<?php

declare(strict_types=1);

namespace Vbespalov\LaravelTelegram\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use Vbespalov\LaravelTelegram\LaravelData\Data;

#[MapName(SnakeCaseMapper::class)]
class LivePhoto extends Data
{
    public function __construct(
        /** @var array<int, PhotoSize>|Optional */
        public array|Optional $photo,
        public string $fileId,
        public string $fileUniqueId,
        public int $width,
        public int $height,
        public int $duration,
        public string|Optional $mimeType,
        public int|Optional $fileSize,
    ) {}
}
