<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineQuery extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'from' => ['property' => 'from', 'type' => 'User', 'optional' => false],
        'query' => ['property' => 'query', 'type' => 'String', 'optional' => false],
        'offset' => ['property' => 'offset', 'type' => 'String', 'optional' => false],
        'chat_type' => ['property' => 'chatType', 'type' => 'String', 'optional' => true],
        'location' => ['property' => 'location', 'type' => 'Location', 'optional' => true],
    ];

    public function __construct(
        public readonly string $id,
        public readonly User $from,
        public readonly string $query,
        public readonly string $offset,
        public readonly ?string $chatType = null,
        public readonly ?Location $location = null,
    ) {}
}
