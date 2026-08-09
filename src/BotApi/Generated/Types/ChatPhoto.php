<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatPhoto extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'small_file_id' => ['property' => 'smallFileId', 'type' => 'String', 'optional' => false],
        'small_file_unique_id' => ['property' => 'smallFileUniqueId', 'type' => 'String', 'optional' => false],
        'big_file_id' => ['property' => 'bigFileId', 'type' => 'String', 'optional' => false],
        'big_file_unique_id' => ['property' => 'bigFileUniqueId', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $smallFileId,
        public readonly string $smallFileUniqueId,
        public readonly string $bigFileId,
        public readonly string $bigFileUniqueId,
    ) {}
}
