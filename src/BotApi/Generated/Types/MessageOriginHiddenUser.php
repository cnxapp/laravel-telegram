<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MessageOriginHiddenUser extends MessageOrigin
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'sender_user_name' => ['property' => 'senderUserName', 'type' => 'String', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'hidden_user',
    ];

    public function __construct(
        public readonly string $type,
        public readonly int $date,
        public readonly string $senderUserName,
    ) {}
}
