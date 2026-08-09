<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class User extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'Integer', 'optional' => false],
        'is_bot' => ['property' => 'isBot', 'type' => 'Boolean', 'optional' => false],
        'first_name' => ['property' => 'firstName', 'type' => 'String', 'optional' => false],
        'last_name' => ['property' => 'lastName', 'type' => 'String', 'optional' => true],
        'username' => ['property' => 'username', 'type' => 'String', 'optional' => true],
        'language_code' => ['property' => 'languageCode', 'type' => 'String', 'optional' => true],
        'is_premium' => ['property' => 'isPremium', 'type' => 'True', 'optional' => true],
        'added_to_attachment_menu' => ['property' => 'addedToAttachmentMenu', 'type' => 'True', 'optional' => true],
        'can_join_groups' => ['property' => 'canJoinGroups', 'type' => 'Boolean', 'optional' => true],
        'can_read_all_group_messages' => ['property' => 'canReadAllGroupMessages', 'type' => 'Boolean', 'optional' => true],
        'supports_guest_queries' => ['property' => 'supportsGuestQueries', 'type' => 'Boolean', 'optional' => true],
        'supports_inline_queries' => ['property' => 'supportsInlineQueries', 'type' => 'Boolean', 'optional' => true],
        'can_connect_to_business' => ['property' => 'canConnectToBusiness', 'type' => 'Boolean', 'optional' => true],
        'has_main_web_app' => ['property' => 'hasMainWebApp', 'type' => 'Boolean', 'optional' => true],
        'has_topics_enabled' => ['property' => 'hasTopicsEnabled', 'type' => 'Boolean', 'optional' => true],
        'allows_users_to_create_topics' => ['property' => 'allowsUsersToCreateTopics', 'type' => 'Boolean', 'optional' => true],
        'can_manage_bots' => ['property' => 'canManageBots', 'type' => 'Boolean', 'optional' => true],
        'supports_join_request_queries' => ['property' => 'supportsJoinRequestQueries', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly int $id,
        public readonly bool $isBot,
        public readonly string $firstName,
        public readonly ?string $lastName = null,
        public readonly ?string $username = null,
        public readonly ?string $languageCode = null,
        public readonly ?bool $isPremium = null,
        public readonly ?bool $addedToAttachmentMenu = null,
        public readonly ?bool $canJoinGroups = null,
        public readonly ?bool $canReadAllGroupMessages = null,
        public readonly ?bool $supportsGuestQueries = null,
        public readonly ?bool $supportsInlineQueries = null,
        public readonly ?bool $canConnectToBusiness = null,
        public readonly ?bool $hasMainWebApp = null,
        public readonly ?bool $hasTopicsEnabled = null,
        public readonly ?bool $allowsUsersToCreateTopics = null,
        public readonly ?bool $canManageBots = null,
        public readonly ?bool $supportsJoinRequestQueries = null,
    ) {}
}
