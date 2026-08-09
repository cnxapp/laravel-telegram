<?php

namespace Cnx\LaravelTelegram\DTO;

use Cnx\LaravelTelegram\Enums\EmojiType;
use Cnx\LaravelTelegram\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class ReactionType extends Data
{
    /**
     * This object describes the type of a reaction
     *
     * @link https://core.telegram.org/bots/api#reactiontype
     *
     * @param  EmojiType  $type  Type of the reaction
     * @param  string|null  $emoji  When type is "emoji", contains emoji string
     * @param  string|null  $customEmojiId  When type is "custom_emoji", contains custom emoji identifier
     */
    public function __construct(
        public EmojiType $type,
        public ?string $emoji,
        public ?string $customEmojiId,
    ) {}
}
