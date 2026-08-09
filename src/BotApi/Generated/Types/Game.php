<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Game extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'description' => ['property' => 'description', 'type' => 'String', 'optional' => false],
        'photo' => ['property' => 'photo', 'type' => 'Array of PhotoSize', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => true],
        'text_entities' => ['property' => 'textEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'animation' => ['property' => 'animation', 'type' => 'Animation', 'optional' => true],
    ];

    /**
     * @param  list<PhotoSize>  $photo
     * @param  list<MessageEntity>|null  $textEntities
     */
    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly array $photo,
        public readonly ?string $text = null,
        public readonly ?array $textEntities = null,
        public readonly ?Animation $animation = null,
    ) {}
}
