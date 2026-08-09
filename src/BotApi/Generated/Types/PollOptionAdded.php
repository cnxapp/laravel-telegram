<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PollOptionAdded extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'poll_message' => ['property' => 'pollMessage', 'type' => 'MaybeInaccessibleMessage', 'optional' => true],
        'option_persistent_id' => ['property' => 'optionPersistentId', 'type' => 'String', 'optional' => false],
        'option_text' => ['property' => 'optionText', 'type' => 'String', 'optional' => false],
        'option_text_entities' => ['property' => 'optionTextEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $optionTextEntities
     */
    public function __construct(
        public readonly string $optionPersistentId,
        public readonly string $optionText,
        public readonly Message|InaccessibleMessage|null $pollMessage = null,
        public readonly ?array $optionTextEntities = null,
    ) {}
}
