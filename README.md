# Laravel Telegram

A typed Telegram Bot API 10.2 client and DTO package for Laravel 10, 11 and 12.

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

The generated client covers the complete
[Telegram Bot API 10.2 contract](https://core.telegram.org/bots/api): 185
methods and 388 types, including the rich-message and guest-bot additions.
Every method has a request DTO, typed parameters and a typed response.

Use the generated API through `BotApi`:

```php
use Cnx\LaravelTelegram\BotApi\Generated\Requests\SendMessageRequest;
use Cnx\LaravelTelegram\Facades\BotApi;

$message = BotApi::sendMessage(new SendMessageRequest(
    chatId: 123456789,
    text: 'Hello from the typed Bot API client',
    disableNotification: true,
));

echo $message->messageId;
```

Generated request classes live in
`Cnx\LaravelTelegram\BotApi\Generated\Requests`; response and input types live
in `Cnx\LaravelTelegram\BotApi\Generated\Types`. Tagged Telegram unions are
hydrated to their concrete variant.

Uploads work for direct and nested `attach://` fields:

```php
use Cnx\LaravelTelegram\BotApi\Generated\Requests\SendPhotoRequest;
use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\Facades\BotApi;

$message = BotApi::sendPhoto(new SendPhotoRequest(
    chatId: 123456789,
    photo: InputFile::fromPath(storage_path('app/photo.jpg')),
));
```

The original `Telegram` facade and its curated DTOs remain available for
backward compatibility. `BotApi::call()` is also available as a raw escape
hatch when Telegram publishes an API version newer than the generated
contract.

The pinned source manifest is
`resources/telegram-bot-api-10.2.json`. Generated files are reproducible from
the official documentation:

```shell
composer generate:bot-api
```

The generator refuses a source whose latest advertised Bot API version is not
10.2, preventing a newer contract from being silently published under the old
version number. Generated files should not be edited manually.

## Quality checks

```shell
composer install
composer qa
```

The QA script runs Laravel Pint, Larastan and PHPUnit.
Larastan is configured at its maximum level. The contract test verifies every
type, field, union, method, parameter and return mapping in the pinned manifest.

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
