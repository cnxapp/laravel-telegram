<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatJoinRequest extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'from' => ['property' => 'from', 'type' => 'User', 'optional' => false],
        'user_chat_id' => ['property' => 'userChatId', 'type' => 'Integer', 'optional' => false],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'bio' => ['property' => 'bio', 'type' => 'String', 'optional' => true],
        'invite_link' => ['property' => 'inviteLink', 'type' => 'ChatInviteLink', 'optional' => true],
        'query_id' => ['property' => 'queryId', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly Chat $chat,
        public readonly User $from,
        public readonly int $userChatId,
        public readonly int $date,
        public readonly ?string $bio = null,
        public readonly ?ChatInviteLink $inviteLink = null,
        public readonly ?string $queryId = null,
    ) {}
}
