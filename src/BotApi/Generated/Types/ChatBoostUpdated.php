<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatBoostUpdated extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'boost' => ['property' => 'boost', 'type' => 'ChatBoost', 'optional' => false],
    ];

    public function __construct(
        public readonly Chat $chat,
        public readonly ChatBoost $boost,
    ) {}
}
