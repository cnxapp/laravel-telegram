<?php

declare(strict_types=1);

namespace Vbespalov\LaravelTelegram\DTO;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Vbespalov\LaravelTelegram\LaravelData\Casts\CarbonInterfaceCast;
use Vbespalov\LaravelTelegram\LaravelData\Data;

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
