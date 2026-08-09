<?php

namespace Cnx\LaravelTelegram\DTO;

use Cnx\LaravelTelegram\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapName(SnakeCaseMapper::class)]
class InlineKeyboardMarkup extends Data
{
    /**
     * This object represents an inline keyboard that appears right next to the message it belongs to.
     *
     * @link https://core.telegram.org/bots/api#inlinekeyboardmarkup
     *
     * @param  array<int, array<int, InlineKeyboardButton>>  $inlineKeyboard  Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    public function __construct(
        /** @var array<int, array<int, InlineKeyboardButton>> */
        public array|Optional $inlineKeyboard,
    ) {}

    /**
     * @param  array<int, mixed>  $inlineKeyboardButtonsRow
     * @return $this
     */
    public function addInlineKeyboardButtonsRow(array $inlineKeyboardButtonsRow): static
    {
        $inlineKeyboardButtonsRow = array_values(array_filter(
            $inlineKeyboardButtonsRow,
            static fn (mixed $button): bool => $button instanceof InlineKeyboardButton,
        ));

        if (! empty($inlineKeyboardButtonsRow)) {
            if ($this->inlineKeyboard instanceof Optional) {
                $this->inlineKeyboard = [$inlineKeyboardButtonsRow];
            } else {
                $this->inlineKeyboard[] = $inlineKeyboardButtonsRow;
            }
        }

        return $this;
    }
}
