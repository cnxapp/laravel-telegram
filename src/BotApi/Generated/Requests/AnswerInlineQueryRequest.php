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
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultsButton;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultVenue;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultVideo;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InlineQueryResultVoice;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class AnswerInlineQueryRequest extends Request
{
    protected const METHOD = 'answerInlineQuery';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'inline_query_id' => ['property' => 'inlineQueryId', 'type' => 'String', 'optional' => false],
        'results' => ['property' => 'results', 'type' => 'Array of InlineQueryResult', 'optional' => false],
        'cache_time' => ['property' => 'cacheTime', 'type' => 'Integer', 'optional' => true],
        'is_personal' => ['property' => 'isPersonal', 'type' => 'Boolean', 'optional' => true],
        'next_offset' => ['property' => 'nextOffset', 'type' => 'String', 'optional' => true],
        'button' => ['property' => 'button', 'type' => 'InlineQueryResultsButton', 'optional' => true],
    ];

    /**
     * @param  list<InlineQueryResultCachedAudio|InlineQueryResultCachedDocument|InlineQueryResultCachedGif|InlineQueryResultCachedMpeg4Gif|InlineQueryResultCachedPhoto|InlineQueryResultCachedSticker|InlineQueryResultCachedVideo|InlineQueryResultCachedVoice|InlineQueryResultArticle|InlineQueryResultAudio|InlineQueryResultContact|InlineQueryResultGame|InlineQueryResultDocument|InlineQueryResultGif|InlineQueryResultLocation|InlineQueryResultMpeg4Gif|InlineQueryResultPhoto|InlineQueryResultVenue|InlineQueryResultVideo|InlineQueryResultVoice>  $results
     */
    public function __construct(
        public readonly string $inlineQueryId,
        public readonly array $results,
        public readonly ?int $cacheTime = null,
        public readonly ?bool $isPersonal = null,
        public readonly ?string $nextOffset = null,
        public readonly ?InlineQueryResultsButton $button = null,
    ) {}
}
