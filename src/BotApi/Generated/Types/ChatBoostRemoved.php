<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatBoostRemoved extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'boost_id' => ['property' => 'boostId', 'type' => 'String', 'optional' => false],
        'remove_date' => ['property' => 'removeDate', 'type' => 'Integer', 'optional' => false],
        'source' => ['property' => 'source', 'type' => 'ChatBoostSource', 'optional' => false],
    ];

    public function __construct(
        public readonly Chat $chat,
        public readonly string $boostId,
        public readonly int $removeDate,
        public readonly ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway $source,
    ) {}
}
