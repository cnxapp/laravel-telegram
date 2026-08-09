<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class UniqueGiftInfo extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'gift' => ['property' => 'gift', 'type' => 'UniqueGift', 'optional' => false],
        'origin' => ['property' => 'origin', 'type' => 'String', 'optional' => false],
        'last_resale_currency' => ['property' => 'lastResaleCurrency', 'type' => 'String', 'optional' => true],
        'last_resale_amount' => ['property' => 'lastResaleAmount', 'type' => 'Integer', 'optional' => true],
        'owned_gift_id' => ['property' => 'ownedGiftId', 'type' => 'String', 'optional' => true],
        'transfer_star_count' => ['property' => 'transferStarCount', 'type' => 'Integer', 'optional' => true],
        'next_transfer_date' => ['property' => 'nextTransferDate', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly UniqueGift $gift,
        public readonly string $origin,
        public readonly ?string $lastResaleCurrency = null,
        public readonly ?int $lastResaleAmount = null,
        public readonly ?string $ownedGiftId = null,
        public readonly ?int $transferStarCount = null,
        public readonly ?int $nextTransferDate = null,
    ) {}
}
