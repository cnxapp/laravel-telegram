<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi;

final class MultipartPayload
{
    /**
     * @param  array<string, mixed>  $parameters
     * @param  array<string, InputFile>  $attachments
     */
    private function __construct(
        public readonly array $parameters,
        public readonly array $attachments,
    ) {}

    /** @param array<string, mixed> $parameters */
    public static function from(array $parameters): self
    {
        $normalized = [];
        $attachments = [];
        $counter = 0;

        foreach ($parameters as $field => $value) {
            if ($value instanceof InputFile) {
                $attachments[$field] = $value;

                continue;
            }
            $normalized[$field] = self::nested($value, $attachments, $counter);
        }

        if ($attachments !== []) {
            foreach ($normalized as $field => $value) {
                if (is_array($value)) {
                    $normalized[$field] = json_encode($value, JSON_THROW_ON_ERROR);
                }
            }
        }

        return new self($normalized, $attachments);
    }

    /** @param array<string, InputFile> $attachments */
    private static function nested(mixed $value, array &$attachments, int &$counter): mixed
    {
        if ($value instanceof InputFile) {
            $name = $value->attachName ?? 'attachment_'.++$counter;
            while (array_key_exists($name, $attachments)) {
                $name = 'attachment_'.++$counter;
            }
            $attachments[$name] = $value;

            return 'attach://'.$name;
        }

        if (is_array($value)) {
            $result = [];
            foreach ($value as $key => $item) {
                $result[$key] = self::nested($item, $attachments, $counter);
            }

            return $result;
        }

        return $value;
    }
}
