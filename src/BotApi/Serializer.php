<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi;

use BackedEnum;
use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

final class Serializer
{
    /**
     * @param  array<string, array{property: string, type: string, optional: bool}>  $definitions
     * @return array<string, mixed>
     */
    public static function fields(object $object, array $definitions): array
    {
        $result = [];
        foreach ($definitions as $field => $definition) {
            $property = $definition['property'];
            $value = $object->$property;
            if ($definition['optional'] && $value === null) {
                continue;
            }
            $result[$field] = self::value($value);
        }

        return $result;
    }

    public static function value(mixed $value): mixed
    {
        if ($value instanceof InputFile) {
            return $value;
        }
        if ($value instanceof BackedEnum) {
            return $value->value;
        }
        if ($value instanceof Type || $value instanceof Request) {
            return $value->toArray();
        }
        if ($value instanceof Arrayable) {
            return self::value($value->toArray());
        }
        if ($value instanceof JsonSerializable) {
            return self::value($value->jsonSerialize());
        }
        if (is_array($value)) {
            $result = [];
            foreach ($value as $key => $item) {
                $result[$key] = self::value($item);
            }

            return $result;
        }

        return $value;
    }
}
