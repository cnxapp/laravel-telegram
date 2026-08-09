<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineKeyboardMarkup extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'inline_keyboard' => ['property' => 'inlineKeyboard', 'type' => 'Array of Array of InlineKeyboardButton', 'optional' => false],
    ];

    /**
     * @param  list<list<InlineKeyboardButton>>  $inlineKeyboard
     */
    public function __construct(
        public readonly array $inlineKeyboard,
    ) {}
}
