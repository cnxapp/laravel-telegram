<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineQueryResultVideo extends InlineQueryResult
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'video_url' => ['property' => 'videoUrl', 'type' => 'String', 'optional' => false],
        'mime_type' => ['property' => 'mimeType', 'type' => 'String', 'optional' => false],
        'thumbnail_url' => ['property' => 'thumbnailUrl', 'type' => 'String', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'caption' => ['property' => 'caption', 'type' => 'String', 'optional' => true],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'caption_entities' => ['property' => 'captionEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'show_caption_above_media' => ['property' => 'showCaptionAboveMedia', 'type' => 'Boolean', 'optional' => true],
        'video_width' => ['property' => 'videoWidth', 'type' => 'Integer', 'optional' => true],
        'video_height' => ['property' => 'videoHeight', 'type' => 'Integer', 'optional' => true],
        'video_duration' => ['property' => 'videoDuration', 'type' => 'Integer', 'optional' => true],
        'description' => ['property' => 'description', 'type' => 'String', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
        'input_message_content' => ['property' => 'inputMessageContent', 'type' => 'InputMessageContent', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'video',
    ];

    /**
     * @param  list<MessageEntity>|null  $captionEntities
     */
    public function __construct(
        public readonly string $type,
        public readonly string $id,
        public readonly string $videoUrl,
        public readonly string $mimeType,
        public readonly string $thumbnailUrl,
        public readonly string $title,
        public readonly ?string $caption = null,
        public readonly ?string $parseMode = null,
        public readonly ?array $captionEntities = null,
        public readonly ?bool $showCaptionAboveMedia = null,
        public readonly ?int $videoWidth = null,
        public readonly ?int $videoHeight = null,
        public readonly ?int $videoDuration = null,
        public readonly ?string $description = null,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
        public readonly InputTextMessageContent|InputRichMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent|null $inputMessageContent = null,
    ) {}
}
