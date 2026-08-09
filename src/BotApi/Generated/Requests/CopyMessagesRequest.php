<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class CopyMessagesRequest extends Request
{
    protected const METHOD = 'copyMessages';

    protected const RETURN_TYPE = 'Array of MessageId';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'direct_messages_topic_id' => ['property' => 'directMessagesTopicId', 'type' => 'Integer', 'optional' => true],
        'from_chat_id' => ['property' => 'fromChatId', 'type' => 'Integer or String', 'optional' => false],
        'message_ids' => ['property' => 'messageIds', 'type' => 'Array of Integer', 'optional' => false],
        'disable_notification' => ['property' => 'disableNotification', 'type' => 'Boolean', 'optional' => true],
        'protect_content' => ['property' => 'protectContent', 'type' => 'Boolean', 'optional' => true],
        'remove_caption' => ['property' => 'removeCaption', 'type' => 'Boolean', 'optional' => true],
    ];

    /**
     * @param  list<int>  $messageIds
     */
    public function __construct(
        public readonly int|string $chatId,
        public readonly int|string $fromChatId,
        public readonly array $messageIds,
        public readonly ?int $messageThreadId = null,
        public readonly ?int $directMessagesTopicId = null,
        public readonly ?bool $disableNotification = null,
        public readonly ?bool $protectContent = null,
        public readonly ?bool $removeCaption = null,
    ) {}
}
