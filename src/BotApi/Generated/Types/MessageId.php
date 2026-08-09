<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MessageId extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int $messageId,
    ) {}
}
