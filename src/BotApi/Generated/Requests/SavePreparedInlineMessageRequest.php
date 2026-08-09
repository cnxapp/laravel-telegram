<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultArticle;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultAudio;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultCachedAudio;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultCachedDocument;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultCachedGif;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultCachedMpeg4Gif;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultCachedPhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultCachedSticker;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultCachedVideo;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultCachedVoice;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultContact;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultDocument;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultGame;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultGif;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultLocation;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultMpeg4Gif;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultPhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultVenue;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultVideo;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultVoice;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SavePreparedInlineMessageRequest extends Request
{
    protected const METHOD = 'savePreparedInlineMessage';

    protected const RETURN_TYPE = 'PreparedInlineMessage';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'result' => ['property' => 'result', 'type' => 'InlineQueryResult', 'optional' => false],
        'allow_user_chats' => ['property' => 'allowUserChats', 'type' => 'Boolean', 'optional' => true],
        'allow_bot_chats' => ['property' => 'allowBotChats', 'type' => 'Boolean', 'optional' => true],
        'allow_group_chats' => ['property' => 'allowGroupChats', 'type' => 'Boolean', 'optional' => true],
        'allow_channel_chats' => ['property' => 'allowChannelChats', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly InlineQueryResultCachedAudio|InlineQueryResultCachedDocument|InlineQueryResultCachedGif|InlineQueryResultCachedMpeg4Gif|InlineQueryResultCachedPhoto|InlineQueryResultCachedSticker|InlineQueryResultCachedVideo|InlineQueryResultCachedVoice|InlineQueryResultArticle|InlineQueryResultAudio|InlineQueryResultContact|InlineQueryResultGame|InlineQueryResultDocument|InlineQueryResultGif|InlineQueryResultLocation|InlineQueryResultMpeg4Gif|InlineQueryResultPhoto|InlineQueryResultVenue|InlineQueryResultVideo|InlineQueryResultVoice $result,
        public readonly ?bool $allowUserChats = null,
        public readonly ?bool $allowBotChats = null,
        public readonly ?bool $allowGroupChats = null,
        public readonly ?bool $allowChannelChats = null,
    ) {}
}
