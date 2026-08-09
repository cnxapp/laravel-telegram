<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class ApproveSuggestedPostRequest extends Request
{
    protected const METHOD = 'approveSuggestedPost';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer', 'optional' => false],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
        'send_date' => ['property' => 'sendDate', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly int $chatId,
        public readonly int $messageId,
        public readonly ?int $sendDate = null,
    ) {}
}
