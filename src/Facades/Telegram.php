<?php

namespace Vbespalov\LaravelTelegram\Facades;

use Illuminate\Support\Facades\Facade;
use Vbespalov\LaravelTelegram\TelegramApiClient;

/**
 * @mixin TelegramApiClient
 */
class Telegram extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return TelegramApiClient::class;
    }
}
