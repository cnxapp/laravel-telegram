<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class StickerSet extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'sticker_type' => ['property' => 'stickerType', 'type' => 'String', 'optional' => false],
        'stickers' => ['property' => 'stickers', 'type' => 'Array of Sticker', 'optional' => false],
        'thumbnail' => ['property' => 'thumbnail', 'type' => 'PhotoSize', 'optional' => true],
    ];

    /**
     * @param  list<Sticker>  $stickers
     */
    public function __construct(
        public readonly string $name,
        public readonly string $title,
        public readonly string $stickerType,
        public readonly array $stickers,
        public readonly ?PhotoSize $thumbnail = null,
    ) {}
}
