<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PassportElementErrorTranslationFiles extends PassportElementError
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'source' => ['property' => 'source', 'type' => 'String', 'optional' => false],
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'file_hashes' => ['property' => 'fileHashes', 'type' => 'Array of String', 'optional' => false],
        'message' => ['property' => 'message', 'type' => 'String', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'source' => 'translation_files',
    ];

    /**
     * @param  list<string>  $fileHashes
     */
    public function __construct(
        public readonly string $source,
        public readonly string $type,
        public readonly array $fileHashes,
        public readonly string $message,
    ) {}
}
