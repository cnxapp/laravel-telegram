<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineKeyboardMarkup;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaAnimation;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaAudio;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaDocument;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaLivePhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaPhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaVideo;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class EditMessageMediaRequest extends Request
{
    protected const METHOD = 'editMessageMedia';

    protected const RETURN_TYPE = 'Message or Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => true],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => true],
        'inline_message_id' => ['property' => 'inlineMessageId', 'type' => 'String', 'optional' => true],
        'media' => ['property' => 'media', 'type' => 'InputMedia', 'optional' => false],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
    ];

    public function __construct(
        public readonly InputMediaAnimation|InputMediaAudio|InputMediaDocument|InputMediaLivePhoto|InputMediaPhoto|InputMediaVideo $media,
        public readonly ?string $businessConnectionId = null,
        public readonly int|string|null $chatId = null,
        public readonly ?int $messageId = null,
        public readonly ?string $inlineMessageId = null,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
    ) {}
}
