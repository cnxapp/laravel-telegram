<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class GiftBackground extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'center_color' => ['property' => 'centerColor', 'type' => 'Integer', 'optional' => false],
        'edge_color' => ['property' => 'edgeColor', 'type' => 'Integer', 'optional' => false],
        'text_color' => ['property' => 'textColor', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int $centerColor,
        public readonly int $edgeColor,
        public readonly int $textColor,
    ) {}
}
