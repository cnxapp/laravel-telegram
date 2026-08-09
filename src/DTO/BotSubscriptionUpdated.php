<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\DTO;

use Cnx\LaravelTelegram\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class BotSubscriptionUpdated extends Data
{
    public function __construct(
        public User $user,
        public string $invoicePayload,
        public string $state,
    ) {}
}
