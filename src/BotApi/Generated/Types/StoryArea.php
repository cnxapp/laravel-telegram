<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class StoryArea extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'position' => ['property' => 'position', 'type' => 'StoryAreaPosition', 'optional' => false],
        'type' => ['property' => 'type', 'type' => 'StoryAreaType', 'optional' => false],
    ];

    public function __construct(
        public readonly StoryAreaPosition $position,
        public readonly StoryAreaTypeLocation|StoryAreaTypeSuggestedReaction|StoryAreaTypeLink|StoryAreaTypeWeather|StoryAreaTypeUniqueGift $type,
    ) {}
}
