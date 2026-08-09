<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Sticker extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'file_id' => ['property' => 'fileId', 'type' => 'String', 'optional' => false],
        'file_unique_id' => ['property' => 'fileUniqueId', 'type' => 'String', 'optional' => false],
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'width' => ['property' => 'width', 'type' => 'Integer', 'optional' => false],
        'height' => ['property' => 'height', 'type' => 'Integer', 'optional' => false],
        'is_animated' => ['property' => 'isAnimated', 'type' => 'Boolean', 'optional' => false],
        'is_video' => ['property' => 'isVideo', 'type' => 'Boolean', 'optional' => false],
        'thumbnail' => ['property' => 'thumbnail', 'type' => 'PhotoSize', 'optional' => true],
        'emoji' => ['property' => 'emoji', 'type' => 'String', 'optional' => true],
        'set_name' => ['property' => 'setName', 'type' => 'String', 'optional' => true],
        'premium_animation' => ['property' => 'premiumAnimation', 'type' => 'File', 'optional' => true],
        'mask_position' => ['property' => 'maskPosition', 'type' => 'MaskPosition', 'optional' => true],
        'custom_emoji_id' => ['property' => 'customEmojiId', 'type' => 'String', 'optional' => true],
        'needs_repainting' => ['property' => 'needsRepainting', 'type' => 'True', 'optional' => true],
        'file_size' => ['property' => 'fileSize', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly string $fileId,
        public readonly string $fileUniqueId,
        public readonly string $type,
        public readonly int $width,
        public readonly int $height,
        public readonly bool $isAnimated,
        public readonly bool $isVideo,
        public readonly ?PhotoSize $thumbnail = null,
        public readonly ?string $emoji = null,
        public readonly ?string $setName = null,
        public readonly ?File $premiumAnimation = null,
        public readonly ?MaskPosition $maskPosition = null,
        public readonly ?string $customEmojiId = null,
        public readonly ?bool $needsRepainting = null,
        public readonly ?int $fileSize = null,
    ) {}
}
