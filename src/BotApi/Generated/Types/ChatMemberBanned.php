<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatMemberBanned extends ChatMember
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'status' => ['property' => 'status', 'type' => 'String', 'optional' => false],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => false],
        'until_date' => ['property' => 'untilDate', 'type' => 'Integer', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'status' => 'kicked',
    ];

    public function __construct(
        public readonly string $status,
        public readonly User $user,
        public readonly int $untilDate,
    ) {}
}
