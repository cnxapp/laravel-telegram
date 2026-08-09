<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BusinessConnection extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => false],
        'user_chat_id' => ['property' => 'userChatId', 'type' => 'Integer', 'optional' => false],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'rights' => ['property' => 'rights', 'type' => 'BusinessBotRights', 'optional' => true],
        'is_enabled' => ['property' => 'isEnabled', 'type' => 'Boolean', 'optional' => false],
    ];

    public function __construct(
        public readonly string $id,
        public readonly User $user,
        public readonly int $userChatId,
        public readonly int $date,
        public readonly bool $isEnabled,
        public readonly ?BusinessBotRights $rights = null,
    ) {}
}
