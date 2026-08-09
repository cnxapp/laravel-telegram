<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PollOption extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'persistent_id' => ['property' => 'persistentId', 'type' => 'String', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'text_entities' => ['property' => 'textEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'media' => ['property' => 'media', 'type' => 'PollMedia', 'optional' => true],
        'voter_count' => ['property' => 'voterCount', 'type' => 'Integer', 'optional' => false],
        'added_by_user' => ['property' => 'addedByUser', 'type' => 'User', 'optional' => true],
        'added_by_chat' => ['property' => 'addedByChat', 'type' => 'Chat', 'optional' => true],
        'addition_date' => ['property' => 'additionDate', 'type' => 'Integer', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $textEntities
     */
    public function __construct(
        public readonly string $persistentId,
        public readonly string $text,
        public readonly int $voterCount,
        public readonly ?array $textEntities = null,
        public readonly ?PollMedia $media = null,
        public readonly ?User $addedByUser = null,
        public readonly ?Chat $addedByChat = null,
        public readonly ?int $additionDate = null,
    ) {}
}
