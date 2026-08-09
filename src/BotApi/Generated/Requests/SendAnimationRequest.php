<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\ForceReply;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageEntity;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyKeyboardRemove;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyParameters;
use Cnx\LaravelTelegram\BotApi\Generated\Types\SuggestedPostParameters;
use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendAnimationRequest extends Request
{
    protected const METHOD = 'sendAnimation';

    protected const RETURN_TYPE = 'Message';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'direct_messages_topic_id' => ['property' => 'directMessagesTopicId', 'type' => 'Integer', 'optional' => true],
        'receiver_user_id' => ['property' => 'receiverUserId', 'type' => 'Integer', 'optional' => true],
        'callback_query_id' => ['property' => 'callbackQueryId', 'type' => 'String', 'optional' => true],
        'animation' => ['property' => 'animation', 'type' => 'InputFile or String', 'optional' => false],
        'duration' => ['property' => 'duration', 'type' => 'Integer', 'optional' => true],
        'width' => ['property' => 'width', 'type' => 'Integer', 'optional' => true],
        'height' => ['property' => 'height', 'type' => 'Integer', 'optional' => true],
        'thumbnail' => ['property' => 'thumbnail', 'type' => 'InputFile or String', 'optional' => true],
        'caption' => ['property' => 'caption', 'type' => 'String', 'optional' => true],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'caption_entities' => ['property' => 'captionEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'show_caption_above_media' => ['property' => 'showCaptionAboveMedia', 'type' => 'Boolean', 'optional' => true],
        'has_spoiler' => ['property' => 'hasSpoiler', 'type' => 'Boolean', 'optional' => true],
        'disable_notification' => ['property' => 'disableNotification', 'type' => 'Boolean', 'optional' => true],
        'protect_content' => ['property' => 'protectContent', 'type' => 'Boolean', 'optional' => true],
        'allow_paid_broadcast' => ['property' => 'allowPaidBroadcast', 'type' => 'Boolean', 'optional' => true],
        'message_effect_id' => ['property' => 'messageEffectId', 'type' => 'String', 'optional' => true],
        'suggested_post_parameters' => ['property' => 'suggestedPostParameters', 'type' => 'SuggestedPostParameters', 'optional' => true],
        'reply_parameters' => ['property' => 'replyParameters', 'type' => 'ReplyParameters', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $captionEntities
     */
    public function __construct(
        public readonly int|string $chatId,
        public readonly InputFile|string $animation,
        public readonly ?string $businessConnectionId = null,
        public readonly ?int $messageThreadId = null,
        public readonly ?int $directMessagesTopicId = null,
        public readonly ?int $receiverUserId = null,
        public readonly ?string $callbackQueryId = null,
        public readonly ?int $duration = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly InputFile|string|null $thumbnail = null,
        public readonly ?string $caption = null,
        public readonly ?string $parseMode = null,
        public readonly ?array $captionEntities = null,
        public readonly ?bool $showCaptionAboveMedia = null,
        public readonly ?bool $hasSpoiler = null,
        public readonly ?bool $disableNotification = null,
        public readonly ?bool $protectContent = null,
        public readonly ?bool $allowPaidBroadcast = null,
        public readonly ?string $messageEffectId = null,
        public readonly ?SuggestedPostParameters $suggestedPostParameters = null,
        public readonly ?ReplyParameters $replyParameters = null,
        public readonly InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {}
}
