<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class PromoteChatMemberRequest extends Request
{
    protected const METHOD = 'promoteChatMember';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'is_anonymous' => ['property' => 'isAnonymous', 'type' => 'Boolean', 'optional' => true],
        'can_manage_chat' => ['property' => 'canManageChat', 'type' => 'Boolean', 'optional' => true],
        'can_delete_messages' => ['property' => 'canDeleteMessages', 'type' => 'Boolean', 'optional' => true],
        'can_manage_video_chats' => ['property' => 'canManageVideoChats', 'type' => 'Boolean', 'optional' => true],
        'can_restrict_members' => ['property' => 'canRestrictMembers', 'type' => 'Boolean', 'optional' => true],
        'can_promote_members' => ['property' => 'canPromoteMembers', 'type' => 'Boolean', 'optional' => true],
        'can_change_info' => ['property' => 'canChangeInfo', 'type' => 'Boolean', 'optional' => true],
        'can_invite_users' => ['property' => 'canInviteUsers', 'type' => 'Boolean', 'optional' => true],
        'can_post_stories' => ['property' => 'canPostStories', 'type' => 'Boolean', 'optional' => true],
        'can_edit_stories' => ['property' => 'canEditStories', 'type' => 'Boolean', 'optional' => true],
        'can_delete_stories' => ['property' => 'canDeleteStories', 'type' => 'Boolean', 'optional' => true],
        'can_post_messages' => ['property' => 'canPostMessages', 'type' => 'Boolean', 'optional' => true],
        'can_edit_messages' => ['property' => 'canEditMessages', 'type' => 'Boolean', 'optional' => true],
        'can_pin_messages' => ['property' => 'canPinMessages', 'type' => 'Boolean', 'optional' => true],
        'can_manage_topics' => ['property' => 'canManageTopics', 'type' => 'Boolean', 'optional' => true],
        'can_manage_direct_messages' => ['property' => 'canManageDirectMessages', 'type' => 'Boolean', 'optional' => true],
        'can_manage_tags' => ['property' => 'canManageTags', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $userId,
        public readonly ?bool $isAnonymous = null,
        public readonly ?bool $canManageChat = null,
        public readonly ?bool $canDeleteMessages = null,
        public readonly ?bool $canManageVideoChats = null,
        public readonly ?bool $canRestrictMembers = null,
        public readonly ?bool $canPromoteMembers = null,
        public readonly ?bool $canChangeInfo = null,
        public readonly ?bool $canInviteUsers = null,
        public readonly ?bool $canPostStories = null,
        public readonly ?bool $canEditStories = null,
        public readonly ?bool $canDeleteStories = null,
        public readonly ?bool $canPostMessages = null,
        public readonly ?bool $canEditMessages = null,
        public readonly ?bool $canPinMessages = null,
        public readonly ?bool $canManageTopics = null,
        public readonly ?bool $canManageDirectMessages = null,
        public readonly ?bool $canManageTags = null,
    ) {}
}
