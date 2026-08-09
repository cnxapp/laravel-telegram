<?php

namespace Cnx\LaravelTelegram\DTO;

use Cnx\LaravelTelegram\Enums\MenuButtonType;
use Cnx\LaravelTelegram\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapName(SnakeCaseMapper::class)]
class MenuButton extends Data
{
    public function __construct(
        public MenuButtonType $type,
        public string|Optional $text = new Optional,
        public WebAppInfo|Optional $webApp = new Optional,
    ) {}
}
