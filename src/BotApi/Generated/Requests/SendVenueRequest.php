<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\ForceReply;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyKeyboardRemove;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyParameters;
use Cnx\LaravelTelegram\BotApi\Generated\Types\SuggestedPostParameters;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendVenueRequest extends Request
{
    protected const METHOD = 'sendVenue';

    protected const RETURN_TYPE = 'Message';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'direct_messages_topic_id' => ['property' => 'directMessagesTopicId', 'type' => 'Integer', 'optional' => true],
        'receiver_user_id' => ['property' => 'receiverUserId', 'type' => 'Integer', 'optional' => true],
        'callback_query_id' => ['property' => 'callbackQueryId', 'type' => 'String', 'optional' => true],
        'latitude' => ['property' => 'latitude', 'type' => 'Float', 'optional' => false],
        'longitude' => ['property' => 'longitude', 'type' => 'Float', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'address' => ['property' => 'address', 'type' => 'String', 'optional' => false],
        'foursquare_id' => ['property' => 'foursquareId', 'type' => 'String', 'optional' => true],
        'foursquare_type' => ['property' => 'foursquareType', 'type' => 'String', 'optional' => true],
        'google_place_id' => ['property' => 'googlePlaceId', 'type' => 'String', 'optional' => true],
        'google_place_type' => ['property' => 'googlePlaceType', 'type' => 'String', 'optional' => true],
        'disable_notification' => ['property' => 'disableNotification', 'type' => 'Boolean', 'optional' => true],
        'protect_content' => ['property' => 'protectContent', 'type' => 'Boolean', 'optional' => true],
        'allow_paid_broadcast' => ['property' => 'allowPaidBroadcast', 'type' => 'Boolean', 'optional' => true],
        'message_effect_id' => ['property' => 'messageEffectId', 'type' => 'String', 'optional' => true],
        'suggested_post_parameters' => ['property' => 'suggestedPostParameters', 'type' => 'SuggestedPostParameters', 'optional' => true],
        'reply_parameters' => ['property' => 'replyParameters', 'type' => 'ReplyParameters', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly string $title,
        public readonly string $address,
        public readonly ?string $businessConnectionId = null,
        public readonly ?int $messageThreadId = null,
        public readonly ?int $directMessagesTopicId = null,
        public readonly ?int $receiverUserId = null,
        public readonly ?string $callbackQueryId = null,
        public readonly ?string $foursquareId = null,
        public readonly ?string $foursquareType = null,
        public readonly ?string $googlePlaceId = null,
        public readonly ?string $googlePlaceType = null,
        public readonly ?bool $disableNotification = null,
        public readonly ?bool $protectContent = null,
        public readonly ?bool $allowPaidBroadcast = null,
        public readonly ?string $messageEffectId = null,
        public readonly ?SuggestedPostParameters $suggestedPostParameters = null,
        public readonly ?ReplyParameters $replyParameters = null,
        public readonly InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {}
}
