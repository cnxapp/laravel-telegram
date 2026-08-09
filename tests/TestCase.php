<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Tests;

use Cnx\LaravelTelegram\TelegramServiceProvider;
use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function application(): Application
    {
        self::assertInstanceOf(Application::class, $this->app);

        return $this->app;
    }

    /** @return array<int, class-string> */
    protected function getPackageProviders($app): array
    {
        return [
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
