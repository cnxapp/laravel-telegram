<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram;

use Cnx\LaravelTelegram\BotApi\Transport;
use Illuminate\Contracts\Foundation\Application;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TelegramServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-telegram')
            ->hasConfigFile();
    }

    public function registeringPackage(): void
    {
        $this->app->singleton(Transport::class);
        $this->app->singleton(BotApiClient::class, function (Application $app) {
            return new BotApiClient($app->make(Transport::class));
        });
    }
}
