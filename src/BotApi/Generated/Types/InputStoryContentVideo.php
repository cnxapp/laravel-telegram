<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputStoryContentVideo extends InputStoryContent
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'video' => ['property' => 'video', 'type' => 'String', 'optional' => false],
        'duration' => ['property' => 'duration', 'type' => 'Float', 'optional' => true],
        'cover_frame_timestamp' => ['property' => 'coverFrameTimestamp', 'type' => 'Float', 'optional' => true],
        'is_animation' => ['property' => 'isAnimation', 'type' => 'Boolean', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'video',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string|InputFile $video,
        public readonly ?float $duration = null,
        public readonly ?float $coverFrameTimestamp = null,
        public readonly ?bool $isAnimation = null,
    ) {}
}
