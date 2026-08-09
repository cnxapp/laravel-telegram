<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputMediaAudio extends InputMedia
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'media' => ['property' => 'media', 'type' => 'String', 'optional' => false],
        'thumbnail' => ['property' => 'thumbnail', 'type' => 'String', 'optional' => true],
        'caption' => ['property' => 'caption', 'type' => 'String', 'optional' => true],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'caption_entities' => ['property' => 'captionEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'duration' => ['property' => 'duration', 'type' => 'Integer', 'optional' => true],
        'performer' => ['property' => 'performer', 'type' => 'String', 'optional' => true],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'audio',
    ];

    /**
     * @param  list<MessageEntity>|null  $captionEntities
     */
    public function __construct(
        public readonly string $type,
        public readonly string|InputFile $media,
        public readonly string|InputFile|null $thumbnail = null,
        public readonly ?string $caption = null,
        public readonly ?string $parseMode = null,
        public readonly ?array $captionEntities = null,
        public readonly ?int $duration = null,
        public readonly ?string $performer = null,
        public readonly ?string $title = null,
    ) {}
}
