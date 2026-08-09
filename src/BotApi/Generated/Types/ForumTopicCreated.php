<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ForumTopicCreated extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => false],
        'icon_color' => ['property' => 'iconColor', 'type' => 'Integer', 'optional' => false],
        'icon_custom_emoji_id' => ['property' => 'iconCustomEmojiId', 'type' => 'String', 'optional' => true],
        'is_name_implicit' => ['property' => 'isNameImplicit', 'type' => 'True', 'optional' => true],
    ];

    public function __construct(
        public readonly string $name,
        public readonly int $iconColor,
        public readonly ?string $iconCustomEmojiId = null,
        public readonly ?bool $isNameImplicit = null,
    ) {}
}
