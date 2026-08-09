<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MessageOriginUser extends MessageOrigin
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'sender_user' => ['property' => 'senderUser', 'type' => 'User', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'user',
    ];

    public function __construct(
        public readonly string $type,
        public readonly int $date,
        public readonly User $senderUser,
    ) {}
}
