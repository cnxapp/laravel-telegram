<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class RichBlockVoiceNote extends RichBlock
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'voice_note' => ['property' => 'voiceNote', 'type' => 'Voice', 'optional' => false],
        'caption' => ['property' => 'caption', 'type' => 'RichBlockCaption', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'voice_note',
    ];

    public function __construct(
        public readonly string $type,
        public readonly Voice $voiceNote,
        public readonly ?RichBlockCaption $caption = null,
    ) {}
}
