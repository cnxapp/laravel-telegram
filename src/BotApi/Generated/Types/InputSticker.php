<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputSticker extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'sticker' => ['property' => 'sticker', 'type' => 'String', 'optional' => false],
        'format' => ['property' => 'format', 'type' => 'String', 'optional' => false],
        'emoji_list' => ['property' => 'emojiList', 'type' => 'Array of String', 'optional' => false],
        'mask_position' => ['property' => 'maskPosition', 'type' => 'MaskPosition', 'optional' => true],
        'keywords' => ['property' => 'keywords', 'type' => 'Array of String', 'optional' => true],
    ];

    /**
     * @param  list<string>  $emojiList
     * @param  list<string>|null  $keywords
     */
    public function __construct(
        public readonly string|InputFile $sticker,
        public readonly string $format,
        public readonly array $emojiList,
        public readonly ?MaskPosition $maskPosition = null,
        public readonly ?array $keywords = null,
    ) {}
}
