<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputPollOption extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'text_parse_mode' => ['property' => 'textParseMode', 'type' => 'String', 'optional' => true],
        'text_entities' => ['property' => 'textEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'media' => ['property' => 'media', 'type' => 'InputPollOptionMedia', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $textEntities
     */
    public function __construct(
        public readonly string $text,
        public readonly ?string $textParseMode = null,
        public readonly ?array $textEntities = null,
        public readonly InputMediaAnimation|InputMediaLink|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaSticker|InputMediaVenue|InputMediaVideo|null $media = null,
    ) {}
}
