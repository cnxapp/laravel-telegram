<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ReplyKeyboardRemove extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'remove_keyboard' => ['property' => 'removeKeyboard', 'type' => 'True', 'optional' => false],
        'selective' => ['property' => 'selective', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly bool $removeKeyboard,
        public readonly ?bool $selective = null,
    ) {}
}
