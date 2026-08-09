<?php

namespace Cnx\LaravelTelegram\DTO;

use Cnx\LaravelTelegram\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapName(SnakeCaseMapper::class)]
class ReplyKeyboardMarkup extends Data
{
    public function __construct(
        /** @var array<int, array<int, KeyboardButton>> */
        public array|Optional $keyboard,
        public bool|Optional $isPersistent,
        public bool|Optional $resizeKeyboard,
        public bool|Optional $oneTimeKeyboard,
        public string|Optional $inputFieldPlaceholder,
        public bool|Optional $selective,
    ) {}

    /**
     * @param  array<int, mixed>  $keyboardButtonsRow
     * @return $this
     */
    public function addKeyboardButtonsRow(array $keyboardButtonsRow): static
    {
        $keyboardButtonsRow = array_values(array_filter(
            $keyboardButtonsRow,
            static fn (mixed $button): bool => $button instanceof KeyboardButton,
        ));

        if (! empty($keyboardButtonsRow)) {
            if ($this->keyboard instanceof Optional) {
                $this->keyboard = [$keyboardButtonsRow];
            } else {
                $this->keyboard[] = $keyboardButtonsRow;
            }
        }

        return $this;
    }
}
