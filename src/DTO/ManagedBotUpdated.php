<?php

declare(strict_types=1);

namespace Vbespalov\LaravelTelegram\DTO;

use Vbespalov\LaravelTelegram\LaravelData\Data;

class ManagedBotUpdated extends Data
{
    public function __construct(
        public User $user,
        public User $bot,
    ) {}
}
