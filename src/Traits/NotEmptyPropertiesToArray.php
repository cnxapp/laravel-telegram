<?php

namespace Cnx\LaravelTelegram\Traits;

use BackedEnum;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Str;
use ReflectionClass;
use ReflectionProperty;
use Spatie\LaravelData\Optional;

trait NotEmptyPropertiesToArray
{
    /**
     * @param  array<string, mixed>  $array
     * @return array<string, mixed>
     */
    public function addNotEmptyProperty(array &$array, string $propertyName): array
    {
        if (property_exists($this, $propertyName) && ! Str::startsWith($propertyName, '_')) {
            $propertyValue = $this->$propertyName;
            if (! is_null($propertyValue) && ! $propertyValue instanceof Optional) {
                $array[$propertyName] = $this->normalizePropertyValue($propertyValue);
            }
        }

        return $array;
    }

    /**
     * @param  array<string, mixed>  $array
     * @return array<string, mixed>
     */
    public function notEmptyPropertiesToArray(array $array = []): array
    {
        $reflect = new ReflectionClass($this);
        $properties = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);
        foreach ($properties as $property) {
            $this->addNotEmptyProperty($array, $property->getName());
        }

        return $array;
    }

    private function normalizePropertyValue(mixed $value): mixed
    {
        if ($value instanceof BackedEnum) {
            return $value->value;
        }

        if ($value instanceof Arrayable) {
            return $this->normalizePropertyValue($value->toArray());
        }

        if (is_array($value)) {
            return array_map(fn (mixed $item): mixed => $this->normalizePropertyValue($item), $value);
        }

        return $value;
    }
}
