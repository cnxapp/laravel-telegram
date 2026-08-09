<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class StoryAreaType extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        StoryAreaTypeLocation::class,
        StoryAreaTypeSuggestedReaction::class,
        StoryAreaTypeLink::class,
        StoryAreaTypeWeather::class,
        StoryAreaTypeUniqueGift::class,
    ];
}
