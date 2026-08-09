<?php

namespace Cnx\LaravelTelegram;

use Cnx\LaravelTelegram\Facades\Telegram;
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

    public function registeringPackage(): void {}

    public function bootingPackage(): void
    {
        $this->app->singleton(TelegramApiClient::class, function ($app) {
            return new TelegramApiClient;
        });
        $this->app->alias('Telegram', Telegram::class);
    }
}
