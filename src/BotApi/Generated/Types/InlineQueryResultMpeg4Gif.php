<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'mpeg4_url' => ['property' => 'mpeg4Url', 'type' => 'String', 'optional' => false],
        'mpeg4_width' => ['property' => 'mpeg4Width', 'type' => 'Integer', 'optional' => true],
        'mpeg4_height' => ['property' => 'mpeg4Height', 'type' => 'Integer', 'optional' => true],
        'mpeg4_duration' => ['property' => 'mpeg4Duration', 'type' => 'Integer', 'optional' => true],
        'thumbnail_url' => ['property' => 'thumbnailUrl', 'type' => 'String', 'optional' => false],
        'thumbnail_mime_type' => ['property' => 'thumbnailMimeType', 'type' => 'String', 'optional' => true],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => true],
        'caption' => ['property' => 'caption', 'type' => 'String', 'optional' => true],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'caption_entities' => ['property' => 'captionEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'show_caption_above_media' => ['property' => 'showCaptionAboveMedia', 'type' => 'Boolean', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
        'input_message_content' => ['property' => 'inputMessageContent', 'type' => 'InputMessageContent', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'mpeg4_gif',
    ];

    /**
     * @param  list<MessageEntity>|null  $captionEntities
     */
    public function __construct(
        public readonly string $type,
        public readonly string $id,
        public readonly string $mpeg4Url,
        public readonly string $thumbnailUrl,
        public readonly ?int $mpeg4Width = null,
        public readonly ?int $mpeg4Height = null,
        public readonly ?int $mpeg4Duration = null,
        public readonly ?string $thumbnailMimeType = null,
        public readonly ?string $title = null,
        public readonly ?string $caption = null,
        public readonly ?string $parseMode = null,
        public readonly ?array $captionEntities = null,
        public readonly ?bool $showCaptionAboveMedia = null,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
        public readonly InputTextMessageContent|InputRichMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent|null $inputMessageContent = null,
    ) {}
}
