<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatPermissions;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class RestrictChatMemberRequest extends Request
{
    protected const METHOD = 'restrictChatMember';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'permissions' => ['property' => 'permissions', 'type' => 'ChatPermissions', 'optional' => false],
        'use_independent_chat_permissions' => ['property' => 'useIndependentChatPermissions', 'type' => 'Boolean', 'optional' => true],
        'until_date' => ['property' => 'untilDate', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $userId,
        public readonly ChatPermissions $permissions,
        public readonly ?bool $useIndependentChatPermissions = null,
        public readonly ?int $untilDate = null,
    ) {}
}
