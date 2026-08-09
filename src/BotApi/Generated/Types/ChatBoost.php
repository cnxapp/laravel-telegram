<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatBoost extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'boost_id' => ['property' => 'boostId', 'type' => 'String', 'optional' => false],
        'add_date' => ['property' => 'addDate', 'type' => 'Integer', 'optional' => false],
        'expiration_date' => ['property' => 'expirationDate', 'type' => 'Integer', 'optional' => false],
        'source' => ['property' => 'source', 'type' => 'ChatBoostSource', 'optional' => false],
    ];

    public function __construct(
        public readonly string $boostId,
        public readonly int $addDate,
        public readonly int $expirationDate,
        public readonly ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway $source,
    ) {}
}
