<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetCustomEmojiStickerSetThumbnailRequest extends Request
{
    protected const METHOD = 'setCustomEmojiStickerSetThumbnail';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => false],
        'custom_emoji_id' => ['property' => 'customEmojiId', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly string $name,
        public readonly ?string $customEmojiId = null,
    ) {}
}
