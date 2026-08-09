<?php

declare(strict_types=1);

namespace Vbespalov\LaravelTelegram\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Vbespalov\LaravelTelegram\LaravelData\Data;

#[MapName(SnakeCaseMapper::class)]
class PaidMediaInfo extends Data
{
    public function __construct(
        public int $starCount,
        /** @var array<int, PaidMedia> */
        public array $paidMedia,
    ) {}
}
