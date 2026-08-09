<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\SuggestedPostParameters;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class ForwardMessageRequest extends Request
{
    protected const METHOD = 'forwardMessage';

    protected const RETURN_TYPE = 'Message';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'direct_messages_topic_id' => ['property' => 'directMessagesTopicId', 'type' => 'Integer', 'optional' => true],
        'from_chat_id' => ['property' => 'fromChatId', 'type' => 'Integer or String', 'optional' => false],
        'video_start_timestamp' => ['property' => 'videoStartTimestamp', 'type' => 'Integer', 'optional' => true],
        'disable_notification' => ['property' => 'disableNotification', 'type' => 'Boolean', 'optional' => true],
        'protect_content' => ['property' => 'protectContent', 'type' => 'Boolean', 'optional' => true],
        'message_effect_id' => ['property' => 'messageEffectId', 'type' => 'String', 'optional' => true],
        'suggested_post_parameters' => ['property' => 'suggestedPostParameters', 'type' => 'SuggestedPostParameters', 'optional' => true],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int|string $fromChatId,
        public readonly int $messageId,
        public readonly ?int $messageThreadId = null,
        public readonly ?int $directMessagesTopicId = null,
        public readonly ?int $videoStartTimestamp = null,
        public readonly ?bool $disableNotification = null,
        public readonly ?bool $protectContent = null,
        public readonly ?string $messageEffectId = null,
        public readonly ?SuggestedPostParameters $suggestedPostParameters = null,
    ) {}
}
