<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\DTO;

use Cnx\LaravelTelegram\LaravelData\Data;

class ManagedBotUpdated extends Data
{
    public function __construct(
        public User $user,
        public User $bot,
    ) {}
}
