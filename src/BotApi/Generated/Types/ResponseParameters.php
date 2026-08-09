<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ResponseParameters extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'migrate_to_chat_id' => ['property' => 'migrateToChatId', 'type' => 'Integer', 'optional' => true],
        'retry_after' => ['property' => 'retryAfter', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly ?int $migrateToChatId = null,
        public readonly ?int $retryAfter = null,
    ) {}
}
