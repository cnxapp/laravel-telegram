# Laravel Telegram

A typed Telegram Bot API client and DTO package for Laravel 10.

The repository is maintained by the `cnxapp` organization and is published as
`cnxapp/laravel-telegram` under the `Cnx\LaravelTelegram` PHP namespace.

## Requirements

- PHP 8.1+
- Laravel 10, 11 or 12

## Installation

```shell
composer require cnxapp/laravel-telegram
```

Publish the configuration when application-level overrides are needed:

```shell
php artisan vendor:publish \
  --provider="Cnx\LaravelTelegram\TelegramServiceProvider" \
  --tag="telegram-config"
```

Configure at least one bot:

```dotenv
TELEGRAM_BOT_TOKEN=123456:replace-me
```

```php
use Cnx\LaravelTelegram\Facades\Telegram;
use Cnx\LaravelTelegram\MessageBuilder;

$bot = Telegram::getMe();

Telegram::sendMessage(
    new MessageBuilder(chat_id: 123456789, text: 'Hello from Laravel'),
);
```

Multiple bot configurations can be selected for one request:

```php
Telegram::bot('cashier')->getMe();
```

The selection is reset after every request, including failed requests, which
makes the singleton client safe to reuse in long-lived queue workers.

## API coverage

The package focuses on the Bot API objects consumed by Cryptonix notification
flows. It includes typed DTOs for all current top-level `Update` variants and
the message/service objects used by those flows. It is not yet a complete model
of every Telegram Bot API 10.2 request and response object.

Unknown fields in Telegram responses are ignored by `spatie/laravel-data`.
New enum values and new tagged-union variants still require a package update.
For broad API coverage, schema-driven DTO generation is the recommended next
step.

## Quality checks

```shell
composer install
composer qa
```

The QA script runs Laravel Pint, Larastan and PHPUnit.

The development toolchain runs against a currently supported Laravel release.
Laravel 10 remains a runtime compatibility target for existing consumers, but
applications should migrate because that framework branch is no longer a safe
long-term baseline.

## Versioning

Version 2 changes the Composer identity from `vbespalov/laravel-telegram` to
`cnxapp/laravel-telegram` and the PHP namespace from
`Vbespalov\LaravelTelegram` to `Cnx\LaravelTelegram`.

Upgrade from version 1 by replacing the package and updating imports:

```shell
composer remove vbespalov/laravel-telegram
composer require cnxapp/laravel-telegram:^2.0
```

## License

MIT
