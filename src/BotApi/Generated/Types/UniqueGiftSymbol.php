<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class UniqueGiftSymbol extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => false],
        'sticker' => ['property' => 'sticker', 'type' => 'Sticker', 'optional' => false],
        'rarity_per_mille' => ['property' => 'rarityPerMille', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly string $name,
        public readonly Sticker $sticker,
        public readonly int $rarityPerMille,
    ) {}
}
