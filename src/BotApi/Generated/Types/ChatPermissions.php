<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatPermissions extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'can_send_messages' => ['property' => 'canSendMessages', 'type' => 'Boolean', 'optional' => true],
        'can_send_audios' => ['property' => 'canSendAudios', 'type' => 'Boolean', 'optional' => true],
        'can_send_documents' => ['property' => 'canSendDocuments', 'type' => 'Boolean', 'optional' => true],
        'can_send_photos' => ['property' => 'canSendPhotos', 'type' => 'Boolean', 'optional' => true],
        'can_send_videos' => ['property' => 'canSendVideos', 'type' => 'Boolean', 'optional' => true],
        'can_send_video_notes' => ['property' => 'canSendVideoNotes', 'type' => 'Boolean', 'optional' => true],
        'can_send_voice_notes' => ['property' => 'canSendVoiceNotes', 'type' => 'Boolean', 'optional' => true],
        'can_send_polls' => ['property' => 'canSendPolls', 'type' => 'Boolean', 'optional' => true],
        'can_send_other_messages' => ['property' => 'canSendOtherMessages', 'type' => 'Boolean', 'optional' => true],
        'can_add_web_page_previews' => ['property' => 'canAddWebPagePreviews', 'type' => 'Boolean', 'optional' => true],
        'can_react_to_messages' => ['property' => 'canReactToMessages', 'type' => 'Boolean', 'optional' => true],
        'can_edit_tag' => ['property' => 'canEditTag', 'type' => 'Boolean', 'optional' => true],
        'can_change_info' => ['property' => 'canChangeInfo', 'type' => 'Boolean', 'optional' => true],
        'can_invite_users' => ['property' => 'canInviteUsers', 'type' => 'Boolean', 'optional' => true],
        'can_pin_messages' => ['property' => 'canPinMessages', 'type' => 'Boolean', 'optional' => true],
        'can_manage_topics' => ['property' => 'canManageTopics', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly ?bool $canSendMessages = null,
        public readonly ?bool $canSendAudios = null,
        public readonly ?bool $canSendDocuments = null,
        public readonly ?bool $canSendPhotos = null,
        public readonly ?bool $canSendVideos = null,
        public readonly ?bool $canSendVideoNotes = null,
        public readonly ?bool $canSendVoiceNotes = null,
        public readonly ?bool $canSendPolls = null,
        public readonly ?bool $canSendOtherMessages = null,
        public readonly ?bool $canAddWebPagePreviews = null,
        public readonly ?bool $canReactToMessages = null,
        public readonly ?bool $canEditTag = null,
        public readonly ?bool $canChangeInfo = null,
        public readonly ?bool $canInviteUsers = null,
        public readonly ?bool $canPinMessages = null,
        public readonly ?bool $canManageTopics = null,
    ) {}
}
