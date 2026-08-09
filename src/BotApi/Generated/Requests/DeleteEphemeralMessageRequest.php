<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class DeleteEphemeralMessageRequest extends Request
{
    protected const METHOD = 'deleteEphemeralMessage';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'receiver_user_id' => ['property' => 'receiverUserId', 'type' => 'Integer', 'optional' => false],
        'ephemeral_message_id' => ['property' => 'ephemeralMessageId', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $receiverUserId,
        public readonly int $ephemeralMessageId,
    ) {}
}
