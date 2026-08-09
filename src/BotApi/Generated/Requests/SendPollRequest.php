<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\ForceReply;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaAnimation;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaAudio;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaDocument;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaLivePhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaLocation;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaPhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaVenue;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaVideo;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputPollOption;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageEntity;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyKeyboardRemove;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReplyParameters;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendPollRequest extends Request
{
    protected const METHOD = 'sendPoll';

    protected const RETURN_TYPE = 'Message';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'question' => ['property' => 'question', 'type' => 'String', 'optional' => false],
        'question_parse_mode' => ['property' => 'questionParseMode', 'type' => 'String', 'optional' => true],
        'question_entities' => ['property' => 'questionEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'options' => ['property' => 'options', 'type' => 'Array of InputPollOption', 'optional' => false],
        'is_anonymous' => ['property' => 'isAnonymous', 'type' => 'Boolean', 'optional' => true],
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => true],
        'allows_multiple_answers' => ['property' => 'allowsMultipleAnswers', 'type' => 'Boolean', 'optional' => true],
        'allows_revoting' => ['property' => 'allowsRevoting', 'type' => 'Boolean', 'optional' => true],
        'shuffle_options' => ['property' => 'shuffleOptions', 'type' => 'Boolean', 'optional' => true],
        'allow_adding_options' => ['property' => 'allowAddingOptions', 'type' => 'Boolean', 'optional' => true],
        'hide_results_until_closes' => ['property' => 'hideResultsUntilCloses', 'type' => 'Boolean', 'optional' => true],
        'members_only' => ['property' => 'membersOnly', 'type' => 'Boolean', 'optional' => true],
        'country_codes' => ['property' => 'countryCodes', 'type' => 'Array of String', 'optional' => true],
        'correct_option_ids' => ['property' => 'correctOptionIds', 'type' => 'Array of Integer', 'optional' => true],
        'explanation' => ['property' => 'explanation', 'type' => 'String', 'optional' => true],
        'explanation_parse_mode' => ['property' => 'explanationParseMode', 'type' => 'String', 'optional' => true],
        'explanation_entities' => ['property' => 'explanationEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'explanation_media' => ['property' => 'explanationMedia', 'type' => 'InputPollMedia', 'optional' => true],
        'open_period' => ['property' => 'openPeriod', 'type' => 'Integer', 'optional' => true],
        'close_date' => ['property' => 'closeDate', 'type' => 'Integer', 'optional' => true],
        'is_closed' => ['property' => 'isClosed', 'type' => 'Boolean', 'optional' => true],
        'description' => ['property' => 'description', 'type' => 'String', 'optional' => true],
        'description_parse_mode' => ['property' => 'descriptionParseMode', 'type' => 'String', 'optional' => true],
        'description_entities' => ['property' => 'descriptionEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'media' => ['property' => 'media', 'type' => 'InputPollMedia', 'optional' => true],
        'disable_notification' => ['property' => 'disableNotification', 'type' => 'Boolean', 'optional' => true],
        'protect_content' => ['property' => 'protectContent', 'type' => 'Boolean', 'optional' => true],
        'allow_paid_broadcast' => ['property' => 'allowPaidBroadcast', 'type' => 'Boolean', 'optional' => true],
        'message_effect_id' => ['property' => 'messageEffectId', 'type' => 'String', 'optional' => true],
        'reply_parameters' => ['property' => 'replyParameters', 'type' => 'ReplyParameters', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply', 'optional' => true],
    ];

    /**
     * @param  list<InputPollOption>  $options
     * @param  list<MessageEntity>|null  $questionEntities
     * @param  list<string>|null  $countryCodes
     * @param  list<int>|null  $correctOptionIds
     * @param  list<MessageEntity>|null  $explanationEntities
     * @param  list<MessageEntity>|null  $descriptionEntities
     */
    public function __construct(
        public readonly int|string $chatId,
        public readonly string $question,
        public readonly array $options,
        public readonly ?string $businessConnectionId = null,
        public readonly ?int $messageThreadId = null,
        public readonly ?string $questionParseMode = null,
        public readonly ?array $questionEntities = null,
        public readonly ?bool $isAnonymous = null,
        public readonly ?string $type = null,
        public readonly ?bool $allowsMultipleAnswers = null,
        public readonly ?bool $allowsRevoting = null,
        public readonly ?bool $shuffleOptions = null,
        public readonly ?bool $allowAddingOptions = null,
        public readonly ?bool $hideResultsUntilCloses = null,
        public readonly ?bool $membersOnly = null,
        public readonly ?array $countryCodes = null,
        public readonly ?array $correctOptionIds = null,
        public readonly ?string $explanation = null,
        public readonly ?string $explanationParseMode = null,
        public readonly ?array $explanationEntities = null,
        public readonly InputMediaAnimation|InputMediaAudio|InputMediaDocument|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaVenue|InputMediaVideo|null $explanationMedia = null,
        public readonly ?int $openPeriod = null,
        public readonly ?int $closeDate = null,
        public readonly ?bool $isClosed = null,
        public readonly ?string $description = null,
        public readonly ?string $descriptionParseMode = null,
        public readonly ?array $descriptionEntities = null,
        public readonly InputMediaAnimation|InputMediaAudio|InputMediaDocument|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaVenue|InputMediaVideo|null $media = null,
        public readonly ?bool $disableNotification = null,
        public readonly ?bool $protectContent = null,
        public readonly ?bool $allowPaidBroadcast = null,
        public readonly ?string $messageEffectId = null,
        public readonly ?ReplyParameters $replyParameters = null,
        public readonly InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {}
}
