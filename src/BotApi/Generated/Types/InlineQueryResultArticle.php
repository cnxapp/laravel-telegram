<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineQueryResultArticle extends InlineQueryResult
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'input_message_content' => ['property' => 'inputMessageContent', 'type' => 'InputMessageContent', 'optional' => false],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
        'url' => ['property' => 'url', 'type' => 'String', 'optional' => true],
        'description' => ['property' => 'description', 'type' => 'String', 'optional' => true],
        'thumbnail_url' => ['property' => 'thumbnailUrl', 'type' => 'String', 'optional' => true],
        'thumbnail_width' => ['property' => 'thumbnailWidth', 'type' => 'Integer', 'optional' => true],
        'thumbnail_height' => ['property' => 'thumbnailHeight', 'type' => 'Integer', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'article',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string $id,
        public readonly string $title,
        public readonly InputTextMessageContent|InputRichMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent $inputMessageContent,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
        public readonly ?string $url = null,
        public readonly ?string $description = null,
        public readonly ?string $thumbnailUrl = null,
        public readonly ?int $thumbnailWidth = null,
        public readonly ?int $thumbnailHeight = null,
    ) {}
}
