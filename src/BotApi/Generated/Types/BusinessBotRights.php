<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BusinessBotRights extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'can_reply' => ['property' => 'canReply', 'type' => 'True', 'optional' => true],
        'can_read_messages' => ['property' => 'canReadMessages', 'type' => 'True', 'optional' => true],
        'can_delete_sent_messages' => ['property' => 'canDeleteSentMessages', 'type' => 'True', 'optional' => true],
        'can_delete_all_messages' => ['property' => 'canDeleteAllMessages', 'type' => 'True', 'optional' => true],
        'can_edit_name' => ['property' => 'canEditName', 'type' => 'True', 'optional' => true],
        'can_edit_bio' => ['property' => 'canEditBio', 'type' => 'True', 'optional' => true],
        'can_edit_profile_photo' => ['property' => 'canEditProfilePhoto', 'type' => 'True', 'optional' => true],
        'can_edit_username' => ['property' => 'canEditUsername', 'type' => 'True', 'optional' => true],
        'can_change_gift_settings' => ['property' => 'canChangeGiftSettings', 'type' => 'True', 'optional' => true],
        'can_view_gifts_and_stars' => ['property' => 'canViewGiftsAndStars', 'type' => 'True', 'optional' => true],
        'can_convert_gifts_to_stars' => ['property' => 'canConvertGiftsToStars', 'type' => 'True', 'optional' => true],
        'can_transfer_and_upgrade_gifts' => ['property' => 'canTransferAndUpgradeGifts', 'type' => 'True', 'optional' => true],
        'can_transfer_stars' => ['property' => 'canTransferStars', 'type' => 'True', 'optional' => true],
        'can_manage_stories' => ['property' => 'canManageStories', 'type' => 'True', 'optional' => true],
    ];

    public function __construct(
        public readonly ?bool $canReply = null,
        public readonly ?bool $canReadMessages = null,
        public readonly ?bool $canDeleteSentMessages = null,
        public readonly ?bool $canDeleteAllMessages = null,
        public readonly ?bool $canEditName = null,
        public readonly ?bool $canEditBio = null,
        public readonly ?bool $canEditProfilePhoto = null,
        public readonly ?bool $canEditUsername = null,
        public readonly ?bool $canChangeGiftSettings = null,
        public readonly ?bool $canViewGiftsAndStars = null,
        public readonly ?bool $canConvertGiftsToStars = null,
        public readonly ?bool $canTransferAndUpgradeGifts = null,
        public readonly ?bool $canTransferStars = null,
        public readonly ?bool $canManageStories = null,
    ) {}
}
