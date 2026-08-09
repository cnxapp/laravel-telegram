<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\LinkPreviewOptions;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageEntity;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class EditEphemeralMessageTextRequest extends Request
{
    protected const METHOD = 'editEphemeralMessageText';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'receiver_user_id' => ['property' => 'receiverUserId', 'type' => 'Integer', 'optional' => false],
        'ephemeral_message_id' => ['property' => 'ephemeralMessageId', 'type' => 'Integer', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'entities' => ['property' => 'entities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'link_preview_options' => ['property' => 'linkPreviewOptions', 'type' => 'LinkPreviewOptions', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $entities
     */
    public function __construct(
        public readonly int|string $chatId,
        public readonly int $receiverUserId,
        public readonly int $ephemeralMessageId,
        public readonly string $text,
        public readonly ?string $parseMode = null,
        public readonly ?array $entities = null,
        public readonly ?LinkPreviewOptions $linkPreviewOptions = null,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
    ) {}
}
