<?php

declare(strict_types=1);

namespace Vbespalov\LaravelTelegram\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use Vbespalov\LaravelTelegram\LaravelData\Data;

#[MapName(SnakeCaseMapper::class)]
class PaidMedia extends Data
{
    /**
     * Telegram models PaidMedia as a tagged union. This flattened DTO preserves
     * the package's existing union representation while retaining the discriminator.
     */
    public function __construct(
        public string $type,
        public LivePhoto|Optional $livePhoto,
        /** @var array<int, PhotoSize>|Optional */
        public array|Optional $photo,
        public int|Optional $width,
        public int|Optional $height,
        public int|Optional $duration,
        public Video|Optional $video,
    ) {}
}
