<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BusinessMessagesDeleted extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'message_ids' => ['property' => 'messageIds', 'type' => 'Array of Integer', 'optional' => false],
    ];

    /**
     * @param  list<int>  $messageIds
     */
    public function __construct(
        public readonly string $businessConnectionId,
        public readonly Chat $chat,
        public readonly array $messageIds,
    ) {}
}
