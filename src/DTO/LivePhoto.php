<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\DTO;

use Cnx\LaravelTelegram\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

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
