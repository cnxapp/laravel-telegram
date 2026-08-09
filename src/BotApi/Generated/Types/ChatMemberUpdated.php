<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatMemberUpdated extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'from' => ['property' => 'from', 'type' => 'User', 'optional' => false],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'old_chat_member' => ['property' => 'oldChatMember', 'type' => 'ChatMember', 'optional' => false],
        'new_chat_member' => ['property' => 'newChatMember', 'type' => 'ChatMember', 'optional' => false],
        'invite_link' => ['property' => 'inviteLink', 'type' => 'ChatInviteLink', 'optional' => true],
        'via_join_request' => ['property' => 'viaJoinRequest', 'type' => 'Boolean', 'optional' => true],
        'via_chat_folder_invite_link' => ['property' => 'viaChatFolderInviteLink', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly Chat $chat,
        public readonly User $from,
        public readonly int $date,
        public readonly ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned $oldChatMember,
        public readonly ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned $newChatMember,
        public readonly ?ChatInviteLink $inviteLink = null,
        public readonly ?bool $viaJoinRequest = null,
        public readonly ?bool $viaChatFolderInviteLink = null,
    ) {}
}
