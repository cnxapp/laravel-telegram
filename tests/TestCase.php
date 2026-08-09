<?php

declare(strict_types=1);

namespace Vbespalov\LaravelTelegram\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\LaravelData\LaravelDataServiceProvider;
use Vbespalov\LaravelTelegram\TelegramServiceProvider;

abstract class TestCase extends Orchestra
{
    /** @return array<int, class-string> */
    protected function getPackageProviders($app): array
    {
        return [
            LaravelDataServiceProvider::class,
            TelegramServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('telegram.api_url', 'https://api.telegram.org');
        $app['config']->set('telegram.default_bot_config', 'default');
        $app['config']->set('telegram.bot_configs', [
            'default' => ['bot_token' => 'default-token'],
            'secondary' => ['bot_token' => 'secondary-token'],
        ]);
        $app['config']->set('telegram.connect_timeout', 1);
        $app['config']->set('telegram.timeout', 2);
    }
}
