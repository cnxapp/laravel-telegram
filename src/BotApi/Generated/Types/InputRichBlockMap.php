<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichBlockMap extends InputRichBlock
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'location' => ['property' => 'location', 'type' => 'Location', 'optional' => false],
        'zoom' => ['property' => 'zoom', 'type' => 'Integer', 'optional' => false],
        'width' => ['property' => 'width', 'type' => 'Integer', 'optional' => false],
        'height' => ['property' => 'height', 'type' => 'Integer', 'optional' => false],
        'caption' => ['property' => 'caption', 'type' => 'RichBlockCaption', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'map',
    ];

    public function __construct(
        public readonly string $type,
        public readonly Location $location,
        public readonly int $zoom,
        public readonly int $width,
        public readonly int $height,
        public readonly ?RichBlockCaption $caption = null,
    ) {}
}
