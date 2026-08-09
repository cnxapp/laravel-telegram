<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class UniqueGift extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'gift_id' => ['property' => 'giftId', 'type' => 'String', 'optional' => false],
        'base_name' => ['property' => 'baseName', 'type' => 'String', 'optional' => false],
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => false],
        'number' => ['property' => 'number', 'type' => 'Integer', 'optional' => false],
        'model' => ['property' => 'model', 'type' => 'UniqueGiftModel', 'optional' => false],
        'symbol' => ['property' => 'symbol', 'type' => 'UniqueGiftSymbol', 'optional' => false],
        'backdrop' => ['property' => 'backdrop', 'type' => 'UniqueGiftBackdrop', 'optional' => false],
        'is_premium' => ['property' => 'isPremium', 'type' => 'True', 'optional' => true],
        'is_burned' => ['property' => 'isBurned', 'type' => 'True', 'optional' => true],
        'is_from_blockchain' => ['property' => 'isFromBlockchain', 'type' => 'True', 'optional' => true],
        'colors' => ['property' => 'colors', 'type' => 'UniqueGiftColors', 'optional' => true],
        'publisher_chat' => ['property' => 'publisherChat', 'type' => 'Chat', 'optional' => true],
    ];

    public function __construct(
        public readonly string $giftId,
        public readonly string $baseName,
        public readonly string $name,
        public readonly int $number,
        public readonly UniqueGiftModel $model,
        public readonly UniqueGiftSymbol $symbol,
        public readonly UniqueGiftBackdrop $backdrop,
        public readonly ?bool $isPremium = null,
        public readonly ?bool $isBurned = null,
        public readonly ?bool $isFromBlockchain = null,
        public readonly ?UniqueGiftColors $colors = null,
        public readonly ?Chat $publisherChat = null,
    ) {}
}
