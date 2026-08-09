# Laravel Telegram

A typed Telegram Bot API 10.2 client for Laravel 10, 11, 12 and 13. The package
contains request objects, response/input DTOs and typed methods for the complete
Telegram Bot API contract.

The package is maintained by the `cnxapp` organization and is published as
`cnxapp/laravel-telegram` under the `Cnx\LaravelTelegram` PHP namespace.

## Requirements

- PHP 8.1+
- Laravel 10, 11, 12 or 13

Laravel 13 requires PHP 8.3 or newer; older supported Laravel versions retain
the package's PHP 8.1 minimum.

## Installation

```shell
composer require cnxapp/laravel-telegram:^3.0
```

The service provider is discovered automatically. Publish the configuration
only when application-level overrides or multiple bots are needed:

```shell
php artisan vendor:publish \
  --provider="Cnx\LaravelTelegram\TelegramServiceProvider" \
  --tag="telegram-config"
```

Configure the default bot:

```dotenv
TELEGRAM_BOT_TOKEN=123456:replace-me
TELEGRAM_CONNECT_TIMEOUT=5
TELEGRAM_TIMEOUT=30
```

## Sending messages

Constructor injection is the recommended API. Laravel resolves `BotApiClient`
from the service container, and PhpStorm sees native request and response
types:

```php
use Cnx\LaravelTelegram\BotApi\Generated\Requests\SendMessageRequest;
use Cnx\LaravelTelegram\BotApi\Generated\Types\Message;
use Cnx\LaravelTelegram\BotApiClient;

final readonly class SendTelegramNotification
{
    public function __construct(private BotApiClient $telegram) {}

    public function __invoke(int $chatId, string $text): Message
    {
        return $this->telegram->sendMessage(new SendMessageRequest(
            chatId: $chatId,
            text: $text,
            parseMode: 'HTML',
            disableNotification: true,
        ));
    }
}
```

The returned value is a generated `Message` DTO, so properties are typed:

```php
$message = $notifier(123456789, '<b>Payment received</b>');

echo $message->messageId;
echo $message->chat->id;
echo $message->text;
```

Methods without parameters do not need a request object:

```php
$bot = $telegram->getMe();
$webhook = $telegram->getWebhookInfo();
```

## Using the BotApi facade

`BotApi` is the only supported facade. It has generated `@method` metadata for
all Telegram methods and provides the same PhpStorm autocomplete as the
injected client:

```php
use Cnx\LaravelTelegram\BotApi\Generated\Requests\SendMessageRequest;
use Cnx\LaravelTelegram\Facades\BotApi;

$message = BotApi::sendMessage(new SendMessageRequest(
    chatId: 123456789,
    text: 'Sent through the facade',
));
```

Prefer constructor injection in application services because dependencies are
explicit and tests can replace `BotApiClient` without facade state.

## Multiple bots

Add named configurations to `config/telegram.php`:

```php
'default_bot_config' => 'default',

'bot_configs' => [
    'default' => [
        'bot_token' => env('TELEGRAM_BOT_TOKEN'),
    ],
    'cashier' => [
        'bot_token' => env('TELEGRAM_CASHIER_BOT_TOKEN'),
    ],
],
```

Select a bot for one request:

```php
$message = $telegram
    ->bot('cashier')
    ->sendMessage(new SendMessageRequest(
        chatId: 123456789,
        text: 'Cashier notification',
    ));
```

The selection resets to the default bot after every request, including failed
requests. This makes the singleton client safe in long-lived queue workers.

## Inline keyboards and nested DTOs

Nested Telegram objects are also typed:

```php
use Cnx\LaravelTelegram\BotApi\Generated\Requests\SendMessageRequest;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardButton;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;

$message = $telegram->sendMessage(new SendMessageRequest(
    chatId: 123456789,
    text: 'Open the transaction',
    replyMarkup: new InlineKeyboardMarkup([
        [
            new InlineKeyboardButton(
                text: 'View transaction',
                url: 'https://example.com/transactions/42',
            ),
            new InlineKeyboardButton(
                text: 'Refresh',
                callbackData: 'refresh:42',
            ),
        ],
    ]),
));
```

## Replies and message topics

```php
use Cnx\LaravelTelegram\BotApi\Generated\Requests\SendMessageRequest;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyParameters;

$message = $telegram->sendMessage(new SendMessageRequest(
    chatId: -1001234567890,
    messageThreadId: 25,
    text: 'Reply inside a forum topic',
    replyParameters: new ReplyParameters(messageId: 100),
));
```

## Editing and deleting messages

```php
use Cnx\LaravelTelegram\BotApi\Generated\Requests\DeleteMessageRequest;
use Cnx\LaravelTelegram\BotApi\Generated\Requests\EditMessageTextRequest;

$edited = $telegram->editMessageText(new EditMessageTextRequest(
    chatId: 123456789,
    messageId: 100,
    text: 'Updated text',
));

$deleted = $telegram->deleteMessage(new DeleteMessageRequest(
    chatId: 123456789,
    messageId: 100,
));
```

`editMessageText` returns `Message|bool`, as defined by Telegram: a `Message`
for a regular chat message and `true` for some inline-message operations.

## Webhooks and incoming updates

Generated response DTOs can hydrate an incoming Telegram payload directly:

```php
use Cnx\LaravelTelegram\BotApi\Generated\Types\Message;
use Cnx\LaravelTelegram\BotApi\Generated\Types\Update;
use Illuminate\Http\Request;

public function webhook(Request $request): void
{
    $update = Update::from($request->all());

    if ($update->message instanceof Message) {
        $chatId = $update->message->chat->id;
        $text = $update->message->text;
    }
}
```

Optional Telegram fields are represented by `null`. DTO properties use
camelCase while `toArray()` serializes them back to Telegram's snake_case
field names:

```php
$payload = $update->toArray();
$json = json_encode($update, JSON_THROW_ON_ERROR);
```

Register a webhook with a typed request:

```php
use Cnx\LaravelTelegram\BotApi\Generated\Requests\SetWebhookRequest;

$telegram->setWebhook(new SetWebhookRequest(
    url: 'https://example.com/api/telegram/webhook',
    secretToken: config('services.telegram.webhook_secret'),
    allowedUpdates: ['message', 'callback_query', 'my_chat_member'],
));
```

## Uploading files

Direct and nested `attach://` uploads are detected automatically:

```php
use Cnx\LaravelTelegram\BotApi\Generated\Requests\SendPhotoRequest;
use Cnx\LaravelTelegram\BotApi\InputFile;

$message = $telegram->sendPhoto(new SendPhotoRequest(
    chatId: 123456789,
    photo: InputFile::fromPath(storage_path('app/photo.jpg')),
    caption: 'Daily report',
));
```

In-memory uploads are supported as well:

```php
$file = InputFile::fromContents(
    contents: $pdfContents,
    filename: 'report.pdf',
    mimeType: 'application/pdf',
);
```

## Error handling

HTTP errors and Telegram API errors throw `TelegramException`:

```php
use Cnx\LaravelTelegram\Exceptions\TelegramException;

try {
    $telegram->sendMessage($request);
} catch (TelegramException $exception) {
    report($exception);

    $telegramCode = $exception->telegramErrorCode();
    $retryAfter = $exception->responseParameters()?->retryAfter;
}
```

Invalid or incomplete Telegram payloads throw an
`InvalidArgumentException` during DTO hydration.

## Raw API calls

`call()` is an escape hatch for a Telegram method newer than the pinned
contract:

```php
$result = $telegram->call(
    method: 'futureTelegramMethod',
    parameters: ['chat_id' => 123456789],
    returnType: 'Mixed',
);
```

Use a generated method whenever it exists: generated calls provide request
validation, response hydration and IDE types.

## PhpStorm autocomplete

The package does not require an IDE helper:

- `BotApiClient` has 185 methods with native request and return types;
- every request DTO has typed named constructor parameters;
- every result DTO has typed readonly properties;
- the `BotApi` facade contains generated static method metadata;
- generated list and union return types are preserved in PHPDoc.

After installing or updating, let PhpStorm finish Composer indexing. If an
already open project shows stale symbols, use **File → Reload All from Disk**.
Invalidate caches only as a last resort.

## API layout

- Requests: `Cnx\LaravelTelegram\BotApi\Generated\Requests`
- Types: `Cnx\LaravelTelegram\BotApi\Generated\Types`
- Client: `Cnx\LaravelTelegram\BotApiClient`
- Facade: `Cnx\LaravelTelegram\Facades\BotApi`
- Uploads: `Cnx\LaravelTelegram\BotApi\InputFile`
- Exceptions: `Cnx\LaravelTelegram\Exceptions`

The generated layer covers the complete
[Telegram Bot API 10.2 contract](https://core.telegram.org/bots/api): 185
methods and 388 types.

## Migrating from the legacy API

Version 3 removes the manually maintained API. The following classes no longer
exist:

- `Facades\Telegram`
- `TelegramApiClient`
- `MessageBuilder`
- the old `DTO` and `Enums` namespaces

Replace the old facade and builder:

```php
// Before
Telegram::bot('cashier')->sendMessage(
    (new MessageBuilder($chatId, $text))->setParseMode(ParseMode::HTML),
);

// After
$telegram->bot('cashier')->sendMessage(new SendMessageRequest(
    chatId: $chatId,
    text: $text,
    parseMode: 'HTML',
));
```

Replace method arguments with request DTOs:

```php
// Before
Telegram::setWebhook(url: $url, secret_token: $secret);

// After
$telegram->setWebhook(new SetWebhookRequest(
    url: $url,
    secretToken: $secret,
));
```

Replace old DTO imports:

```php
// Before
use Cnx\LaravelTelegram\DTO\Update;

// After
use Cnx\LaravelTelegram\BotApi\Generated\Types\Update;
```

Legacy DTOs used `Spatie\LaravelData\Optional` for absent fields. Generated
DTOs use nullable properties instead:

```php
// Before
if (! $message->text instanceof Optional) {
    // ...
}

// After
if ($message->text !== null) {
    // ...
}
```

Applications still using the original package name must change both the
Composer package and imports:

```shell
composer remove vbespalov/laravel-telegram
composer require cnxapp/laravel-telegram:^3.0
```

## Regenerating the API

The pinned source manifest is `resources/telegram-bot-api-10.2.json`.
Generated files are reproducible from the official documentation:

```shell
composer generate:bot-api
```

The generator refuses a source whose latest advertised Bot API version is not
10.2, preventing a newer contract from being silently published under the old
version number. Generated files must not be edited manually.

## Quality checks

```shell
composer install
composer qa
```

The QA script runs Laravel Pint, Larastan at its maximum level and PHPUnit. The
contract test verifies every type, field, union, method, parameter and return
mapping in the pinned manifest.

## Versioning

- Version 1: `vbespalov/laravel-telegram` and the
  `Vbespalov\LaravelTelegram` namespace.
- Version 2: package and namespace moved to `cnxapp`/`Cnx`, with the legacy API
  retained temporarily for migration.
- Version 3: only the generated, complete Bot API remains.

## License

MIT
