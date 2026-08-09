<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputRichMessage;
use Cnx\LaravelTelegram\BotApi\Generated\Types\LinkPreviewOptions;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageEntity;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class EditMessageTextRequest extends Request
{
    protected const METHOD = 'editMessageText';

    protected const RETURN_TYPE = 'Message or Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => true],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => true],
        'inline_message_id' => ['property' => 'inlineMessageId', 'type' => 'String', 'optional' => true],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => true],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'entities' => ['property' => 'entities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'link_preview_options' => ['property' => 'linkPreviewOptions', 'type' => 'LinkPreviewOptions', 'optional' => true],
        'rich_message' => ['property' => 'richMessage', 'type' => 'InputRichMessage', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $entities
     */
    public function __construct(
        public readonly ?string $businessConnectionId = null,
        public readonly int|string|null $chatId = null,
        public readonly ?int $messageId = null,
        public readonly ?string $inlineMessageId = null,
        public readonly ?string $text = null,
        public readonly ?string $parseMode = null,
        public readonly ?array $entities = null,
        public readonly ?LinkPreviewOptions $linkPreviewOptions = null,
        public readonly ?InputRichMessage $richMessage = null,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
    ) {}
}
