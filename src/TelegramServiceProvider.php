<?php

namespace Cnx\LaravelTelegram;

use Cnx\LaravelTelegram\Facades\Telegram;
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

    public function registeringPackage(): void {}

    public function bootingPackage(): void
    {
        $this->app->singleton(TelegramApiClient::class, function () {
            return new TelegramApiClient;
        });
        $this->app->singleton(BotApiClient::class, function (Application $app) {
            return new BotApiClient($app->make(TelegramApiClient::class));
        });
        $this->app->alias('Telegram', Telegram::class);
    }
}
