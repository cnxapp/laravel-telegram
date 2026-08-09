<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichMessageMedia extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'media' => ['property' => 'media', 'type' => 'InputMediaAnimation or InputMediaAudio or InputMediaPhoto or InputMediaVideo or InputMediaVoiceNote', 'optional' => false],
    ];

    public function __construct(
        public readonly string $id,
        public readonly InputMediaAnimation|InputMediaAudio|InputMediaPhoto|InputMediaVideo|InputMediaVoiceNote $media,
    ) {}
}
