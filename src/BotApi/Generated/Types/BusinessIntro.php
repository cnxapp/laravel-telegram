<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BusinessIntro extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => true],
        'message' => ['property' => 'message', 'type' => 'String', 'optional' => true],
        'sticker' => ['property' => 'sticker', 'type' => 'Sticker', 'optional' => true],
    ];

    public function __construct(
        public readonly ?string $title = null,
        public readonly ?string $message = null,
        public readonly ?Sticker $sticker = null,
    ) {}
}
