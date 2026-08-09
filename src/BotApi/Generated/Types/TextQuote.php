<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class TextQuote extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'entities' => ['property' => 'entities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'position' => ['property' => 'position', 'type' => 'Integer', 'optional' => false],
        'is_manual' => ['property' => 'isManual', 'type' => 'True', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $entities
     */
    public function __construct(
        public readonly string $text,
        public readonly int $position,
        public readonly ?array $entities = null,
        public readonly ?bool $isManual = null,
    ) {}
}
