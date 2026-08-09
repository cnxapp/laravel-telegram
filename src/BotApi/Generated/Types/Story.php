<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Story extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'id' => ['property' => 'id', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly Chat $chat,
        public readonly int $id,
    ) {}
}
