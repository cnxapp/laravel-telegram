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
final class EditEphemeralMessageMediaRequest extends Request
{
    protected const METHOD = 'editEphemeralMessageMedia';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'receiver_user_id' => ['property' => 'receiverUserId', 'type' => 'Integer', 'optional' => false],
        'ephemeral_message_id' => ['property' => 'ephemeralMessageId', 'type' => 'Integer', 'optional' => false],
        'media' => ['property' => 'media', 'type' => 'InputMedia', 'optional' => false],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $receiverUserId,
        public readonly int $ephemeralMessageId,
        public readonly InputMediaAnimation|InputMediaAudio|InputMediaDocument|InputMediaLivePhoto|InputMediaPhoto|InputMediaVideo $media,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
    ) {}
}
