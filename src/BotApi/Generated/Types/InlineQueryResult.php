<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class InlineQueryResult extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        InlineQueryResultCachedAudio::class,
        InlineQueryResultCachedDocument::class,
        InlineQueryResultCachedGif::class,
        InlineQueryResultCachedMpeg4Gif::class,
        InlineQueryResultCachedPhoto::class,
        InlineQueryResultCachedSticker::class,
        InlineQueryResultCachedVideo::class,
        InlineQueryResultCachedVoice::class,
        InlineQueryResultArticle::class,
        InlineQueryResultAudio::class,
        InlineQueryResultContact::class,
        InlineQueryResultGame::class,
        InlineQueryResultDocument::class,
        InlineQueryResultGif::class,
        InlineQueryResultLocation::class,
        InlineQueryResultMpeg4Gif::class,
        InlineQueryResultPhoto::class,
        InlineQueryResultVenue::class,
        InlineQueryResultVideo::class,
        InlineQueryResultVoice::class,
    ];
}
