<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;
use LogicException;

/** @implements Arrayable<string, mixed> */
abstract class Request implements Arrayable, JsonSerializable
{
    protected const METHOD = '';

    protected const RETURN_TYPE = 'Mixed';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [];

    final public static function method(): string
    {
        $method = static::METHOD;
        if (! is_string($method)) {
            throw new LogicException('Telegram request METHOD must be a string.');
        }

        return $method;
    }

    final public static function returnType(): string
    {
        $returnType = static::RETURN_TYPE;
        if (! is_string($returnType)) {
            throw new LogicException('Telegram request RETURN_TYPE must be a string.');
        }

        return $returnType;
    }

    /** @return array<string, array{property: string, type: string, optional: bool}> */
    final public static function fieldDefinitions(): array
    {
        return static::FIELDS;
    }

    /** @return array<string, mixed> */
    final public function toArray(): array
    {
        return Serializer::fields($this, static::FIELDS);
    }

    /** @return array<string, mixed> */
    final public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
