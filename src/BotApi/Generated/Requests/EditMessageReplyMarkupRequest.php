<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class EditMessageReplyMarkupRequest extends Request
{
    protected const METHOD = 'editMessageReplyMarkup';

    protected const RETURN_TYPE = 'Message or Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => true],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => true],
        'inline_message_id' => ['property' => 'inlineMessageId', 'type' => 'String', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
    ];

    public function __construct(
        public readonly ?string $businessConnectionId = null,
        public readonly int|string|null $chatId = null,
        public readonly ?int $messageId = null,
        public readonly ?string $inlineMessageId = null,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
    ) {}
}
