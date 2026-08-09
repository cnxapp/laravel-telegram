<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\LabeledPrice;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyParameters;
use Cnx\LaravelTelegram\BotApi\Generated\Types\SuggestedPostParameters;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendInvoiceRequest extends Request
{
    protected const METHOD = 'sendInvoice';

    protected const RETURN_TYPE = 'Message';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'direct_messages_topic_id' => ['property' => 'directMessagesTopicId', 'type' => 'Integer', 'optional' => true],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'description' => ['property' => 'description', 'type' => 'String', 'optional' => false],
        'payload' => ['property' => 'payload', 'type' => 'String', 'optional' => false],
        'provider_token' => ['property' => 'providerToken', 'type' => 'String', 'optional' => true],
        'currency' => ['property' => 'currency', 'type' => 'String', 'optional' => false],
        'prices' => ['property' => 'prices', 'type' => 'Array of LabeledPrice', 'optional' => false],
        'max_tip_amount' => ['property' => 'maxTipAmount', 'type' => 'Integer', 'optional' => true],
        'suggested_tip_amounts' => ['property' => 'suggestedTipAmounts', 'type' => 'Array of Integer', 'optional' => true],
        'start_parameter' => ['property' => 'startParameter', 'type' => 'String', 'optional' => true],
        'provider_data' => ['property' => 'providerData', 'type' => 'String', 'optional' => true],
        'photo_url' => ['property' => 'photoUrl', 'type' => 'String', 'optional' => true],
        'photo_size' => ['property' => 'photoSize', 'type' => 'Integer', 'optional' => true],
        'photo_width' => ['property' => 'photoWidth', 'type' => 'Integer', 'optional' => true],
        'photo_height' => ['property' => 'photoHeight', 'type' => 'Integer', 'optional' => true],
        'need_name' => ['property' => 'needName', 'type' => 'Boolean', 'optional' => true],
        'need_phone_number' => ['property' => 'needPhoneNumber', 'type' => 'Boolean', 'optional' => true],
        'need_email' => ['property' => 'needEmail', 'type' => 'Boolean', 'optional' => true],
        'need_shipping_address' => ['property' => 'needShippingAddress', 'type' => 'Boolean', 'optional' => true],
        'send_phone_number_to_provider' => ['property' => 'sendPhoneNumberToProvider', 'type' => 'Boolean', 'optional' => true],
        'send_email_to_provider' => ['property' => 'sendEmailToProvider', 'type' => 'Boolean', 'optional' => true],
        'is_flexible' => ['property' => 'isFlexible', 'type' => 'Boolean', 'optional' => true],
        'disable_notification' => ['property' => 'disableNotification', 'type' => 'Boolean', 'optional' => true],
        'protect_content' => ['property' => 'protectContent', 'type' => 'Boolean', 'optional' => true],
        'allow_paid_broadcast' => ['property' => 'allowPaidBroadcast', 'type' => 'Boolean', 'optional' => true],
        'message_effect_id' => ['property' => 'messageEffectId', 'type' => 'String', 'optional' => true],
        'suggested_post_parameters' => ['property' => 'suggestedPostParameters', 'type' => 'SuggestedPostParameters', 'optional' => true],
        'reply_parameters' => ['property' => 'replyParameters', 'type' => 'ReplyParameters', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
    ];

    /**
     * @param  list<LabeledPrice>  $prices
     * @param  list<int>|null  $suggestedTipAmounts
     */
    public function __construct(
        public readonly int|string $chatId,
        public readonly string $title,
        public readonly string $description,
        public readonly string $payload,
        public readonly string $currency,
        public readonly array $prices,
        public readonly ?int $messageThreadId = null,
        public readonly ?int $directMessagesTopicId = null,
        public readonly ?string $providerToken = null,
        public readonly ?int $maxTipAmount = null,
        public readonly ?array $suggestedTipAmounts = null,
        public readonly ?string $startParameter = null,
        public readonly ?string $providerData = null,
        public readonly ?string $photoUrl = null,
        public readonly ?int $photoSize = null,
        public readonly ?int $photoWidth = null,
        public readonly ?int $photoHeight = null,
        public readonly ?bool $needName = null,
        public readonly ?bool $needPhoneNumber = null,
        public readonly ?bool $needEmail = null,
        public readonly ?bool $needShippingAddress = null,
        public readonly ?bool $sendPhoneNumberToProvider = null,
        public readonly ?bool $sendEmailToProvider = null,
        public readonly ?bool $isFlexible = null,
        public readonly ?bool $disableNotification = null,
        public readonly ?bool $protectContent = null,
        public readonly ?bool $allowPaidBroadcast = null,
        public readonly ?string $messageEffectId = null,
        public readonly ?SuggestedPostParameters $suggestedPostParameters = null,
        public readonly ?ReplyParameters $replyParameters = null,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
    ) {}
}
