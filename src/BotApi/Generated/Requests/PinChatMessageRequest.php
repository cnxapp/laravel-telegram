<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class PinChatMessageRequest extends Request
{
    protected const METHOD = 'pinChatMessage';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
        'disable_notification' => ['property' => 'disableNotification', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $messageId,
        public readonly ?string $businessConnectionId = null,
        public readonly ?bool $disableNotification = null,
    ) {}
}
