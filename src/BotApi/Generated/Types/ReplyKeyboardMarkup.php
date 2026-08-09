<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ReplyKeyboardMarkup extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'keyboard' => ['property' => 'keyboard', 'type' => 'Array of Array of KeyboardButton', 'optional' => false],
        'is_persistent' => ['property' => 'isPersistent', 'type' => 'Boolean', 'optional' => true],
        'resize_keyboard' => ['property' => 'resizeKeyboard', 'type' => 'Boolean', 'optional' => true],
        'one_time_keyboard' => ['property' => 'oneTimeKeyboard', 'type' => 'Boolean', 'optional' => true],
        'input_field_placeholder' => ['property' => 'inputFieldPlaceholder', 'type' => 'String', 'optional' => true],
        'selective' => ['property' => 'selective', 'type' => 'Boolean', 'optional' => true],
    ];

    /**
     * @param  list<list<KeyboardButton>>  $keyboard
     */
    public function __construct(
        public readonly array $keyboard,
        public readonly ?bool $isPersistent = null,
        public readonly ?bool $resizeKeyboard = null,
        public readonly ?bool $oneTimeKeyboard = null,
        public readonly ?string $inputFieldPlaceholder = null,
        public readonly ?bool $selective = null,
    ) {}
}
