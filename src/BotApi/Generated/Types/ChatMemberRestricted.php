<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatMemberRestricted extends ChatMember
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'status' => ['property' => 'status', 'type' => 'String', 'optional' => false],
        'tag' => ['property' => 'tag', 'type' => 'String', 'optional' => true],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => false],
        'is_member' => ['property' => 'isMember', 'type' => 'Boolean', 'optional' => false],
        'can_send_messages' => ['property' => 'canSendMessages', 'type' => 'Boolean', 'optional' => false],
        'can_send_audios' => ['property' => 'canSendAudios', 'type' => 'Boolean', 'optional' => false],
        'can_send_documents' => ['property' => 'canSendDocuments', 'type' => 'Boolean', 'optional' => false],
        'can_send_photos' => ['property' => 'canSendPhotos', 'type' => 'Boolean', 'optional' => false],
        'can_send_videos' => ['property' => 'canSendVideos', 'type' => 'Boolean', 'optional' => false],
        'can_send_video_notes' => ['property' => 'canSendVideoNotes', 'type' => 'Boolean', 'optional' => false],
        'can_send_voice_notes' => ['property' => 'canSendVoiceNotes', 'type' => 'Boolean', 'optional' => false],
        'can_send_polls' => ['property' => 'canSendPolls', 'type' => 'Boolean', 'optional' => false],
        'can_send_other_messages' => ['property' => 'canSendOtherMessages', 'type' => 'Boolean', 'optional' => false],
        'can_add_web_page_previews' => ['property' => 'canAddWebPagePreviews', 'type' => 'Boolean', 'optional' => false],
        'can_react_to_messages' => ['property' => 'canReactToMessages', 'type' => 'Boolean', 'optional' => false],
        'can_edit_tag' => ['property' => 'canEditTag', 'type' => 'Boolean', 'optional' => false],
        'can_change_info' => ['property' => 'canChangeInfo', 'type' => 'Boolean', 'optional' => false],
        'can_invite_users' => ['property' => 'canInviteUsers', 'type' => 'Boolean', 'optional' => false],
        'can_pin_messages' => ['property' => 'canPinMessages', 'type' => 'Boolean', 'optional' => false],
        'can_manage_topics' => ['property' => 'canManageTopics', 'type' => 'Boolean', 'optional' => false],
        'until_date' => ['property' => 'untilDate', 'type' => 'Integer', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'status' => 'restricted',
    ];

    public function __construct(
        public readonly string $status,
        public readonly User $user,
        public readonly bool $isMember,
        public readonly bool $canSendMessages,
        public readonly bool $canSendAudios,
        public readonly bool $canSendDocuments,
        public readonly bool $canSendPhotos,
        public readonly bool $canSendVideos,
        public readonly bool $canSendVideoNotes,
        public readonly bool $canSendVoiceNotes,
        public readonly bool $canSendPolls,
        public readonly bool $canSendOtherMessages,
        public readonly bool $canAddWebPagePreviews,
        public readonly bool $canReactToMessages,
        public readonly bool $canEditTag,
        public readonly bool $canChangeInfo,
        public readonly bool $canInviteUsers,
        public readonly bool $canPinMessages,
        public readonly bool $canManageTopics,
        public readonly int $untilDate,
        public readonly ?string $tag = null,
    ) {}
}
