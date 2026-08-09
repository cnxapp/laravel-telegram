<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Facades;

use Cnx\LaravelTelegram\BotApiClient;
use Illuminate\Support\Facades\Facade;

/** @mixin BotApiClient */
final class BotApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BotApiClient::class;
    }
}
