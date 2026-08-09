<?php

namespace Cnx\LaravelTelegram;

use Cnx\LaravelTelegram\DTO\ForceReply;
use Cnx\LaravelTelegram\DTO\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\DTO\LinkPreviewOptions;
use Cnx\LaravelTelegram\DTO\Message;
use Cnx\LaravelTelegram\DTO\MessageEntity;
use Cnx\LaravelTelegram\DTO\ReplyKeyboardMarkup;
use Cnx\LaravelTelegram\DTO\ReplyKeyboardRemove;
use Cnx\LaravelTelegram\DTO\ReplyParameters;
use Cnx\LaravelTelegram\Enums\ParseMode;
use Cnx\LaravelTelegram\Facades\Telegram;
use Cnx\LaravelTelegram\Traits\NotEmptyPropertiesToArray;
use Illuminate\Contracts\Support\Arrayable;

/** @implements Arrayable<string, mixed> */
class MessageBuilder implements Arrayable
{
    use NotEmptyPropertiesToArray;

    public function __construct(int|string $chat_id, string $text)
    {
        $this->chat_id = $chat_id;
        $this->text = $text;
    }

    /**
     * @var string|null Optional. Unique identifier of the business connection on behalf of which the message will be sent
     */
    public ?string $business_connection_id = null;

    /**
     * @var int|string Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var int|null Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     */
    public ?int $message_thread_id = null;

    /**
     * @var string Text of the message to be sent, 1-4096 characters after entities parsing
     */
    public string $text;

    /**
     * @var ParseMode Optional. Mode for parsing entities in the message text. See formatting options for more details.
     */
    public ParseMode $parse_mode = ParseMode::MARKDOWN;

    /**
     * @var MessageEntity[] Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     */
    public array $entities = [];

    /**
     * @var LinkPreviewOptions|null Link preview generation options for the message
     */
    public ?LinkPreviewOptions $link_preview_options = null;

    /**
     * @var bool Sends the message silently. Users will receive a notification with no sound.
     */
    public bool $disable_notification = false;

    /**
     * @var bool Protects the contents of the sent message from forwarding and saving
     */
    public bool $protect_content = false;

    /**
     * @var string|null Unique identifier of the message effect to be added to the message; for private chats only
     */
    public ?string $message_effect_id = null;

    public ?ReplyParameters $reply_parameters = null;

    public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null;

    /** @return array<string, mixed> */
    public function getParams(): array
    {
        return $this->toArray();
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return $this->notEmptyPropertiesToArray();
    }

    public function setBusinessConnectionId(?string $business_connection_id): MessageBuilder
    {
        $this->business_connection_id = $business_connection_id;

        return $this;
    }

    public function setMessageThreadId(?int $message_thread_id): MessageBuilder
    {
        $this->message_thread_id = $message_thread_id;

        return $this;
    }

    public function setParseMode(ParseMode $parse_mode): MessageBuilder
    {
        $this->parse_mode = $parse_mode;

        return $this;
    }

    /**
     * @param  MessageEntity[]  $entities
     * @return $this
     */
    public function setEntities(array $entities): MessageBuilder
    {
        $this->entities = $entities;

        return $this;
    }

    public function setLinkPreviewOptions(?LinkPreviewOptions $link_preview_options): MessageBuilder
    {
        $this->link_preview_options = $link_preview_options;

        return $this;
    }

    public function setDisableNotification(bool $disable_notification): MessageBuilder
    {
        $this->disable_notification = $disable_notification;

        return $this;
    }

    public function setProtectContent(bool $protect_content): MessageBuilder
    {
        $this->protect_content = $protect_content;

        return $this;
    }

    public function setMessageEffectId(?string $message_effect_id): MessageBuilder
    {
        $this->message_effect_id = $message_effect_id;

        return $this;
    }

    public function setReplyParameters(?ReplyParameters $reply_parameters): MessageBuilder
    {
        $this->reply_parameters = $reply_parameters;

        return $this;
    }

    public function send(): ?Message
    {
        return Telegram::sendMessage($this);
    }

    public function setReplyMarkup(InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup): MessageBuilder
    {
        $this->reply_markup = $reply_markup;

        return $this;
    }
}
