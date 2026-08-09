<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class OwnedGifts extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'total_count' => ['property' => 'totalCount', 'type' => 'Integer', 'optional' => false],
        'gifts' => ['property' => 'gifts', 'type' => 'Array of OwnedGift', 'optional' => false],
        'next_offset' => ['property' => 'nextOffset', 'type' => 'String', 'optional' => true],
    ];

    /**
     * @param  list<OwnedGiftRegular|OwnedGiftUnique>  $gifts
     */
    public function __construct(
        public readonly int $totalCount,
        public readonly array $gifts,
        public readonly ?string $nextOffset = null,
    ) {}
}
