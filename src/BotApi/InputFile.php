<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi;

use InvalidArgumentException;

final class InputFile
{
    private function __construct(
        private readonly ?string $path,
        private readonly ?string $contents,
        public readonly string $filename,
        public readonly ?string $mimeType = null,
        public readonly ?string $attachName = null,
    ) {}

    public static function fromPath(
        string $path,
        ?string $filename = null,
        ?string $mimeType = null,
        ?string $attachName = null,
    ): self {
        if (! is_file($path) || ! is_readable($path)) {
            throw new InvalidArgumentException("Telegram upload file [{$path}] is not readable.");
        }

        return new self($path, null, $filename ?? basename($path), $mimeType, $attachName);
    }

    public static function fromContents(
        string $contents,
        string $filename,
        ?string $mimeType = null,
        ?string $attachName = null,
    ): self {
        if ($filename === '') {
            throw new InvalidArgumentException('Telegram upload filename must not be empty.');
        }

        return new self(null, $contents, $filename, $mimeType, $attachName);
    }

    public function contents(): string
    {
        if ($this->contents !== null) {
            return $this->contents;
        }

        $contents = $this->path === null ? false : file_get_contents($this->path);
        if (! is_string($contents)) {
            throw new InvalidArgumentException('Unable to read Telegram upload contents.');
        }

        return $contents;
    }
}
