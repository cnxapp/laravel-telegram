<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InputSticker;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class CreateNewStickerSetRequest extends Request
{
    protected const METHOD = 'createNewStickerSet';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'stickers' => ['property' => 'stickers', 'type' => 'Array of InputSticker', 'optional' => false],
        'sticker_type' => ['property' => 'stickerType', 'type' => 'String', 'optional' => true],
        'needs_repainting' => ['property' => 'needsRepainting', 'type' => 'Boolean', 'optional' => true],
    ];

    /**
     * @param  list<InputSticker>  $stickers
     */
    public function __construct(
        public readonly int $userId,
        public readonly string $name,
        public readonly string $title,
        public readonly array $stickers,
        public readonly ?string $stickerType = null,
        public readonly ?bool $needsRepainting = null,
    ) {}
}
