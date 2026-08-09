<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class EditChatInviteLinkRequest extends Request
{
    protected const METHOD = 'editChatInviteLink';

    protected const RETURN_TYPE = 'ChatInviteLink';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'invite_link' => ['property' => 'inviteLink', 'type' => 'String', 'optional' => false],
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => true],
        'expire_date' => ['property' => 'expireDate', 'type' => 'Integer', 'optional' => true],
        'member_limit' => ['property' => 'memberLimit', 'type' => 'Integer', 'optional' => true],
        'creates_join_request' => ['property' => 'createsJoinRequest', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly string $inviteLink,
        public readonly ?string $name = null,
        public readonly ?int $expireDate = null,
        public readonly ?int $memberLimit = null,
        public readonly ?bool $createsJoinRequest = null,
    ) {}
}
