<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputChecklistTask extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'Integer', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'text_entities' => ['property' => 'textEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $textEntities
     */
    public function __construct(
        public readonly int $id,
        public readonly string $text,
        public readonly ?string $parseMode = null,
        public readonly ?array $textEntities = null,
    ) {}
}
