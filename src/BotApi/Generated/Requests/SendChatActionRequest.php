<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendChatActionRequest extends Request
{
    protected const METHOD = 'sendChatAction';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'action' => ['property' => 'action', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly string $action,
        public readonly ?string $businessConnectionId = null,
        public readonly ?int $messageThreadId = null,
    ) {}
}
