<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineQueryResultCachedSticker extends InlineQueryResult
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'sticker_file_id' => ['property' => 'stickerFileId', 'type' => 'String', 'optional' => false],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
        'input_message_content' => ['property' => 'inputMessageContent', 'type' => 'InputMessageContent', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'sticker',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string $id,
        public readonly string $stickerFileId,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
        public readonly InputTextMessageContent|InputRichMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent|null $inputMessageContent = null,
    ) {}
}
