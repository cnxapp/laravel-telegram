<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichBlockVideo extends InputRichBlock
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'video' => ['property' => 'video', 'type' => 'InputMediaVideo', 'optional' => false],
        'caption' => ['property' => 'caption', 'type' => 'RichBlockCaption', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'video',
    ];

    public function __construct(
        public readonly string $type,
        public readonly InputMediaVideo $video,
        public readonly ?RichBlockCaption $caption = null,
    ) {}
}
