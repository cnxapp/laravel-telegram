<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\DTO;

use Cnx\LaravelTelegram\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapName(SnakeCaseMapper::class)]
class GiveawayCreated extends Data
{
    public function __construct(
        public int|Optional $prizeStarCount,
    ) {}
}
