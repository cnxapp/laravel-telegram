<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatMemberAdministrator extends ChatMember
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'status' => ['property' => 'status', 'type' => 'String', 'optional' => false],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => false],
        'can_be_edited' => ['property' => 'canBeEdited', 'type' => 'Boolean', 'optional' => false],
        'is_anonymous' => ['property' => 'isAnonymous', 'type' => 'Boolean', 'optional' => false],
        'can_manage_chat' => ['property' => 'canManageChat', 'type' => 'Boolean', 'optional' => false],
        'can_delete_messages' => ['property' => 'canDeleteMessages', 'type' => 'Boolean', 'optional' => false],
        'can_manage_video_chats' => ['property' => 'canManageVideoChats', 'type' => 'Boolean', 'optional' => false],
        'can_restrict_members' => ['property' => 'canRestrictMembers', 'type' => 'Boolean', 'optional' => false],
        'can_promote_members' => ['property' => 'canPromoteMembers', 'type' => 'Boolean', 'optional' => false],
        'can_change_info' => ['property' => 'canChangeInfo', 'type' => 'Boolean', 'optional' => false],
        'can_invite_users' => ['property' => 'canInviteUsers', 'type' => 'Boolean', 'optional' => false],
        'can_post_stories' => ['property' => 'canPostStories', 'type' => 'Boolean', 'optional' => false],
        'can_edit_stories' => ['property' => 'canEditStories', 'type' => 'Boolean', 'optional' => false],
        'can_delete_stories' => ['property' => 'canDeleteStories', 'type' => 'Boolean', 'optional' => false],
        'can_post_messages' => ['property' => 'canPostMessages', 'type' => 'Boolean', 'optional' => true],
        'can_edit_messages' => ['property' => 'canEditMessages', 'type' => 'Boolean', 'optional' => true],
        'can_pin_messages' => ['property' => 'canPinMessages', 'type' => 'Boolean', 'optional' => true],
        'can_manage_topics' => ['property' => 'canManageTopics', 'type' => 'Boolean', 'optional' => true],
        'can_manage_direct_messages' => ['property' => 'canManageDirectMessages', 'type' => 'Boolean', 'optional' => true],
        'can_manage_tags' => ['property' => 'canManageTags', 'type' => 'Boolean', 'optional' => true],
        'custom_title' => ['property' => 'customTitle', 'type' => 'String', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'status' => 'administrator',
    ];

    public function __construct(
        public readonly string $status,
        public readonly User $user,
        public readonly bool $canBeEdited,
        public readonly bool $isAnonymous,
        public readonly bool $canManageChat,
        public readonly bool $canDeleteMessages,
        public readonly bool $canManageVideoChats,
        public readonly bool $canRestrictMembers,
        public readonly bool $canPromoteMembers,
        public readonly bool $canChangeInfo,
        public readonly bool $canInviteUsers,
        public readonly bool $canPostStories,
        public readonly bool $canEditStories,
        public readonly bool $canDeleteStories,
        public readonly ?bool $canPostMessages = null,
        public readonly ?bool $canEditMessages = null,
        public readonly ?bool $canPinMessages = null,
        public readonly ?bool $canManageTopics = null,
        public readonly ?bool $canManageDirectMessages = null,
        public readonly ?bool $canManageTags = null,
        public readonly ?string $customTitle = null,
    ) {}
}
