<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class RichTextCustomEmoji extends RichText
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'custom_emoji_id' => ['property' => 'customEmojiId', 'type' => 'String', 'optional' => false],
        'alternative_text' => ['property' => 'alternativeText', 'type' => 'String', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'custom_emoji',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string $customEmojiId,
        public readonly string $alternativeText,
    ) {}
}
