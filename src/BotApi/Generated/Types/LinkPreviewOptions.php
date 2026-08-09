<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class LinkPreviewOptions extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'is_disabled' => ['property' => 'isDisabled', 'type' => 'Boolean', 'optional' => true],
        'url' => ['property' => 'url', 'type' => 'String', 'optional' => true],
        'prefer_small_media' => ['property' => 'preferSmallMedia', 'type' => 'Boolean', 'optional' => true],
        'prefer_large_media' => ['property' => 'preferLargeMedia', 'type' => 'Boolean', 'optional' => true],
        'show_above_text' => ['property' => 'showAboveText', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly ?bool $isDisabled = null,
        public readonly ?string $url = null,
        public readonly ?bool $preferSmallMedia = null,
        public readonly ?bool $preferLargeMedia = null,
        public readonly ?bool $showAboveText = null,
    ) {}
}
