<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\DTO;

use Carbon\Carbon;
use Cnx\LaravelTelegram\LaravelData\Casts\CarbonInterfaceCast;
use Cnx\LaravelTelegram\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class ChatBoostRemoved extends Data
{
    public function __construct(
        public Chat $chat,
        public string $boostId,
        #[WithCast(CarbonInterfaceCast::class)]
        public Carbon $removeDate,
        public ChatBoostSource $source,
    ) {}
}
