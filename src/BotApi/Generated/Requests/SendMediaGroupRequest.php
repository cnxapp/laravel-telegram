<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaAudio;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaDocument;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaLivePhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaPhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaVideo;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyParameters;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendMediaGroupRequest extends Request
{
    protected const METHOD = 'sendMediaGroup';

    protected const RETURN_TYPE = 'Array of Message';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'direct_messages_topic_id' => ['property' => 'directMessagesTopicId', 'type' => 'Integer', 'optional' => true],
        'media' => ['property' => 'media', 'type' => 'Array of InputMediaAudio, InputMediaDocument, InputMediaLivePhoto, InputMediaPhoto and InputMediaVideo', 'optional' => false],
        'disable_notification' => ['property' => 'disableNotification', 'type' => 'Boolean', 'optional' => true],
        'protect_content' => ['property' => 'protectContent', 'type' => 'Boolean', 'optional' => true],
        'allow_paid_broadcast' => ['property' => 'allowPaidBroadcast', 'type' => 'Boolean', 'optional' => true],
        'message_effect_id' => ['property' => 'messageEffectId', 'type' => 'String', 'optional' => true],
        'reply_parameters' => ['property' => 'replyParameters', 'type' => 'ReplyParameters', 'optional' => true],
    ];

    /**
     * @param  list<InputMediaAudio|InputMediaDocument|InputMediaLivePhoto|InputMediaPhoto|InputMediaVideo>  $media
     */
    public function __construct(
        public readonly int|string $chatId,
        public readonly array $media,
        public readonly ?string $businessConnectionId = null,
        public readonly ?int $messageThreadId = null,
        public readonly ?int $directMessagesTopicId = null,
        public readonly ?bool $disableNotification = null,
        public readonly ?bool $protectContent = null,
        public readonly ?bool $allowPaidBroadcast = null,
        public readonly ?string $messageEffectId = null,
        public readonly ?ReplyParameters $replyParameters = null,
    ) {}
}
