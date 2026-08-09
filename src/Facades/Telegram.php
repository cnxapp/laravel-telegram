<?php

namespace Cnx\LaravelTelegram\Facades;

use Cnx\LaravelTelegram\TelegramApiClient;
use Illuminate\Support\Facades\Facade;

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
