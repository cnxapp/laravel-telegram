<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChosenInlineResult extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'result_id' => ['property' => 'resultId', 'type' => 'String', 'optional' => false],
        'from' => ['property' => 'from', 'type' => 'User', 'optional' => false],
        'location' => ['property' => 'location', 'type' => 'Location', 'optional' => true],
        'inline_message_id' => ['property' => 'inlineMessageId', 'type' => 'String', 'optional' => true],
        'query' => ['property' => 'query', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $resultId,
        public readonly User $from,
        public readonly string $query,
        public readonly ?Location $location = null,
        public readonly ?string $inlineMessageId = null,
    ) {}
}
