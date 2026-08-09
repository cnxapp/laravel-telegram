<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BotCommandScopeChatMember extends BotCommandScope
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'chat_member',
    ];

    public function __construct(
        public readonly string $type,
        public readonly int|string $chatId,
        public readonly int $userId,
    ) {}
}
