<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class BanChatSenderChatRequest extends Request
{
    protected const METHOD = 'banChatSenderChat';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'sender_chat_id' => ['property' => 'senderChatId', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $senderChatId,
    ) {}
}
