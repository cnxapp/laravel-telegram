<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputChecklist;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class EditMessageChecklistRequest extends Request
{
    protected const METHOD = 'editMessageChecklist';

    protected const RETURN_TYPE = 'Message';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
        'checklist' => ['property' => 'checklist', 'type' => 'InputChecklist', 'optional' => false],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
        public readonly int|string $chatId,
        public readonly int $messageId,
        public readonly InputChecklist $checklist,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
    ) {}
}
