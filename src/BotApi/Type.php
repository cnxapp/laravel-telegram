<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;
use ReflectionClass;

/** @implements Arrayable<string, mixed> */
abstract class Type implements Arrayable, JsonSerializable
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [];

    /** @var list<class-string<Type>> */
    protected const VARIANTS = [];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [];

    /**
     * @param  array<string, mixed>  $data
     * @return static
     */
    public static function from(array $data): Type
    {
        return Hydrator::object(static::class, $data);
    }

    /** @return array<string, array{property: string, type: string, optional: bool}> */
    final public static function fieldDefinitions(): array
    {
        return static::FIELDS;
    }

    /** @return list<class-string<Type>> */
    final public static function variantClasses(): array
    {
        $constant = (new ReflectionClass(static::class))->getReflectionConstant('VARIANTS');
        if ($constant !== false && $constant->getDeclaringClass()->getName() !== static::class) {
            return [];
        }

        return static::VARIANTS;
    }

    /** @return array<string, scalar> */
    final public static function fixedFields(): array
    {
        return static::FIXED_FIELDS;
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
