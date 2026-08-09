<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineQueryResultGame extends InlineQueryResult
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'game_short_name' => ['property' => 'gameShortName', 'type' => 'String', 'optional' => false],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'game',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string $id,
        public readonly string $gameShortName,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
    ) {}
}
