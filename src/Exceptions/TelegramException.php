<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Exceptions;

use Cnx\LaravelTelegram\BotApi\Generated\Types\ResponseParameters;
use RuntimeException;
use Throwable;

class TelegramException extends RuntimeException
{
    public function __construct(
        string $message,
        private readonly ?int $telegramErrorCode = null,
        private readonly ?ResponseParameters $responseParameters = null,
        ?Throwable $previous = null,
    ) {
        parent::__construct($message, $telegramErrorCode ?? 0, $previous);
    }

    public function telegramErrorCode(): ?int
    {
        return $this->telegramErrorCode;
    }

    public function responseParameters(): ?ResponseParameters
    {
        return $this->responseParameters;
    }
}
