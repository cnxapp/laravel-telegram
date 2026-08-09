<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class EditForumTopicRequest extends Request
{
    protected const METHOD = 'editForumTopic';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => false],
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => true],
        'icon_custom_emoji_id' => ['property' => 'iconCustomEmojiId', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $messageThreadId,
        public readonly ?string $name = null,
        public readonly ?string $iconCustomEmojiId = null,
    ) {}
}
