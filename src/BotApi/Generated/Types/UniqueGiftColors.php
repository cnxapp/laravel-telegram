<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class UniqueGiftColors extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'model_custom_emoji_id' => ['property' => 'modelCustomEmojiId', 'type' => 'String', 'optional' => false],
        'symbol_custom_emoji_id' => ['property' => 'symbolCustomEmojiId', 'type' => 'String', 'optional' => false],
        'light_theme_main_color' => ['property' => 'lightThemeMainColor', 'type' => 'Integer', 'optional' => false],
        'light_theme_other_colors' => ['property' => 'lightThemeOtherColors', 'type' => 'Array of Integer', 'optional' => false],
        'dark_theme_main_color' => ['property' => 'darkThemeMainColor', 'type' => 'Integer', 'optional' => false],
        'dark_theme_other_colors' => ['property' => 'darkThemeOtherColors', 'type' => 'Array of Integer', 'optional' => false],
    ];

    /**
     * @param  list<int>  $lightThemeOtherColors
     * @param  list<int>  $darkThemeOtherColors
     */
    public function __construct(
        public readonly string $modelCustomEmojiId,
        public readonly string $symbolCustomEmojiId,
        public readonly int $lightThemeMainColor,
        public readonly array $lightThemeOtherColors,
        public readonly int $darkThemeMainColor,
        public readonly array $darkThemeOtherColors,
    ) {}
}
