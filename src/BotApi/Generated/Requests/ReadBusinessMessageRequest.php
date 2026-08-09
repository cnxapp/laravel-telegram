<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class ReadBusinessMessageRequest extends Request
{
    protected const METHOD = 'readBusinessMessage';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer', 'optional' => false],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
        public readonly int $chatId,
        public readonly int $messageId,
    ) {}
}
