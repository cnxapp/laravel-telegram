<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi;

use InvalidArgumentException;
use Throwable;
use TypeError;

final class Hydrator
{
    private const TYPE_NAMESPACE = 'Cnx\\LaravelTelegram\\BotApi\\Generated\\Types\\';

    /**
     * @template TObject of Type
     *
     * @param  class-string<TObject>  $class
     * @param  array<string, mixed>  $data
     * @return TObject
     */
    public static function object(string $class, array $data): Type
    {
        $variants = $class::variantClasses();
        if ($variants !== []) {
            /** @var TObject $object */
            $object = self::union($class, $variants, $data);

            return $object;
        }

        $arguments = [];
        foreach ($class::fieldDefinitions() as $field => $definition) {
            if (! array_key_exists($field, $data)) {
                if ($definition['optional']) {
                    $arguments[$definition['property']] = null;

                    continue;
                }

                throw new InvalidArgumentException("Required Telegram field [{$field}] is missing for {$class}.");
            }
            $arguments[$definition['property']] = self::value($definition['type'], $data[$field]);
        }

        /** @var TObject $object */
        $object = new $class(...$arguments);

        return $object;
    }

    public static function value(string $type, mixed $value): mixed
    {
        if ($value === null) {
            return null;
        }

        if (str_starts_with($type, 'Array of ')) {
            if (! is_array($value)) {
                throw new InvalidArgumentException("Telegram value for [{$type}] must be an array.");
            }
            $itemType = substr($type, strlen('Array of '));
            $result = [];
            foreach ($value as $key => $item) {
                $result[$key] = self::value(self::normalizeListUnion($itemType), $item);
            }

            return $result;
        }

        $union = self::splitUnion($type);
        if (count($union) > 1) {
            foreach ($union as $candidate) {
                try {
                    return self::value($candidate, $value);
                } catch (InvalidArgumentException|TypeError) {
                }
            }

            throw new InvalidArgumentException("Telegram value does not match [{$type}].");
        }

        return match ($type) {
            'Mixed' => $value,
            'Integer' => is_int($value)
                ? $value
                : throw new InvalidArgumentException('Telegram value must be an integer.'),
            'Float' => is_int($value) || is_float($value)
                ? (float) $value
                : throw new InvalidArgumentException('Telegram value must be a float.'),
            'Boolean', 'True' => is_bool($value)
                ? $value
                : throw new InvalidArgumentException('Telegram value must be a boolean.'),
            'String' => is_string($value)
                ? $value
                : throw new InvalidArgumentException('Telegram value must be a string.'),
            'InputFile' => $value instanceof InputFile
                ? $value
                : throw new InvalidArgumentException('Telegram value must be an InputFile.'),
            default => self::namedType($type, $value),
        };
    }

    private static function namedType(string $type, mixed $value): Type
    {
        $class = self::TYPE_NAMESPACE.$type;
        if (! class_exists($class) || ! is_subclass_of($class, Type::class)) {
            throw new InvalidArgumentException("Unknown Telegram Bot API type [{$type}].");
        }

        /** @var class-string<Type> $class */
        return $class::from(self::objectData($type, $value));
    }

    /** @return array<string, mixed> */
    private static function objectData(string $type, mixed $value): array
    {
        if (! is_array($value)) {
            throw new InvalidArgumentException("Telegram value for [{$type}] must be an object.");
        }

        $data = [];
        foreach ($value as $key => $item) {
            if (! is_string($key)) {
                throw new InvalidArgumentException("Telegram object [{$type}] must use string field names.");
            }
            $data[$key] = $item;
        }

        return $data;
    }

    /**
     * @param  class-string<Type>  $union
     * @param  list<class-string<Type>>  $variants
     * @param  array<string, mixed>  $data
     */
    private static function union(string $union, array $variants, array $data): Type
    {
        $candidates = [];
        foreach ($variants as $variant) {
            $fixed = $variant::fixedFields();
            foreach ($fixed as $field => $expected) {
                if (! array_key_exists($field, $data) || $data[$field] !== $expected) {
                    continue 2;
                }
            }

            $required = array_filter(
                $variant::fieldDefinitions(),
                static fn (array $definition): bool => ! $definition['optional'],
            );
            foreach (array_keys($required) as $field) {
                if (! array_key_exists($field, $data)) {
                    continue 2;
                }
            }
            $candidates[] = ['class' => $variant, 'score' => count($fixed) * 1000 + count($required)];
        }

        usort($candidates, static fn (array $left, array $right): int => $right['score'] <=> $left['score']);
        foreach ($candidates as $candidate) {
            try {
                /** @var class-string<Type> $variant */
                $variant = $candidate['class'];

                return self::object($variant, $data);
            } catch (Throwable) {
            }
        }

        throw new InvalidArgumentException("Unable to resolve Telegram union [{$union}].");
    }

    /** @return list<string> */
    private static function splitUnion(string $type): array
    {
        $parts = preg_split('/\s+or\s+/', $type);

        return array_values(array_filter(array_map('trim', is_array($parts) ? $parts : [$type])));
    }

    private static function normalizeListUnion(string $type): string
    {
        $normalized = preg_replace('/,\s*|\s+and\s+/', ' or ', $type);

        return is_string($normalized) ? $normalized : $type;
    }
}
