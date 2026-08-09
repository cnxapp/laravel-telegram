<?php

namespace Vbespalov\LaravelTelegram\LaravelData\Casts;

use Ramsey\Uuid\Exception\InvalidUuidStringException;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\Uncastable;
use Spatie\LaravelData\Contracts\BaseData;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class UuidCast implements Cast
{
    /**
     * @param  array<string, mixed>  $properties
     * @param  CreationContext<BaseData<mixed, mixed, array-key>>  $context
     */
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): UuidInterface|Uncastable
    {
        if (is_string($value)) {
            try {
                return Uuid::fromString($value);
            } catch (InvalidUuidStringException $e) {
                return Uncastable::create();
            }
        }

        return Uncastable::create();
    }
}
