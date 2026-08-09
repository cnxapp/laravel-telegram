<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class StoryAreaTypeWeather extends StoryAreaType
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'temperature' => ['property' => 'temperature', 'type' => 'Float', 'optional' => false],
        'emoji' => ['property' => 'emoji', 'type' => 'String', 'optional' => false],
        'background_color' => ['property' => 'backgroundColor', 'type' => 'Integer', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'weather',
    ];

    public function __construct(
        public readonly string $type,
        public readonly float $temperature,
        public readonly string $emoji,
        public readonly int $backgroundColor,
    ) {}
}
