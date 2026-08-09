<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram;

use Cnx\LaravelTelegram\BotApi\Generated\Methods;
use Cnx\LaravelTelegram\BotApi\Hydrator;
use Cnx\LaravelTelegram\BotApi\Request;

final class BotApiClient
{
    use Methods;

    public function __construct(private readonly TelegramApiClient $transport) {}

    /** @return $this */
    public function bot(?string $botConfigName = null): self
    {
        $this->transport->bot($botConfigName);

        return $this;
    }

    public function execute(Request $request): mixed
    {
        return $this->call($request::method(), $request->toArray(), $request::returnType());
    }

    /** @param array<string, mixed> $parameters */
    public function call(string $method, array $parameters = [], string $returnType = 'Mixed'): mixed
    {
        $response = $this->transport->sendRequest($method, 'post', $parameters);
        if (! array_key_exists('result', $response)) {
            throw new Exceptions\TelegramDataException('Telegram API response does not contain a result.');
        }

        return Hydrator::value($returnType, $response['result']);
    }
}
