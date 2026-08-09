<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class KeyboardButtonRequestChat extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'request_id' => ['property' => 'requestId', 'type' => 'Integer', 'optional' => false],
        'chat_is_channel' => ['property' => 'chatIsChannel', 'type' => 'Boolean', 'optional' => false],
        'chat_is_forum' => ['property' => 'chatIsForum', 'type' => 'Boolean', 'optional' => true],
        'chat_has_username' => ['property' => 'chatHasUsername', 'type' => 'Boolean', 'optional' => true],
        'chat_is_created' => ['property' => 'chatIsCreated', 'type' => 'Boolean', 'optional' => true],
        'user_administrator_rights' => ['property' => 'userAdministratorRights', 'type' => 'ChatAdministratorRights', 'optional' => true],
        'bot_administrator_rights' => ['property' => 'botAdministratorRights', 'type' => 'ChatAdministratorRights', 'optional' => true],
        'bot_is_member' => ['property' => 'botIsMember', 'type' => 'Boolean', 'optional' => true],
        'request_title' => ['property' => 'requestTitle', 'type' => 'Boolean', 'optional' => true],
        'request_username' => ['property' => 'requestUsername', 'type' => 'Boolean', 'optional' => true],
        'request_photo' => ['property' => 'requestPhoto', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly int $requestId,
        public readonly bool $chatIsChannel,
        public readonly ?bool $chatIsForum = null,
        public readonly ?bool $chatHasUsername = null,
        public readonly ?bool $chatIsCreated = null,
        public readonly ?ChatAdministratorRights $userAdministratorRights = null,
        public readonly ?ChatAdministratorRights $botAdministratorRights = null,
        public readonly ?bool $botIsMember = null,
        public readonly ?bool $requestTitle = null,
        public readonly ?bool $requestUsername = null,
        public readonly ?bool $requestPhoto = null,
    ) {}
}
