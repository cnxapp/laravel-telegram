<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class CreateForumTopicRequest extends Request
{
    protected const METHOD = 'createForumTopic';

    protected const RETURN_TYPE = 'ForumTopic';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => false],
        'icon_color' => ['property' => 'iconColor', 'type' => 'Integer', 'optional' => true],
        'icon_custom_emoji_id' => ['property' => 'iconCustomEmojiId', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly string $name,
        public readonly ?int $iconColor = null,
        public readonly ?string $iconCustomEmojiId = null,
    ) {}
}
