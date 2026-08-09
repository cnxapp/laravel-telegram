<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChecklistTask extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'Integer', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'text_entities' => ['property' => 'textEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'completed_by_user' => ['property' => 'completedByUser', 'type' => 'User', 'optional' => true],
        'completed_by_chat' => ['property' => 'completedByChat', 'type' => 'Chat', 'optional' => true],
        'completion_date' => ['property' => 'completionDate', 'type' => 'Integer', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $textEntities
     */
    public function __construct(
        public readonly int $id,
        public readonly string $text,
        public readonly ?array $textEntities = null,
        public readonly ?User $completedByUser = null,
        public readonly ?Chat $completedByChat = null,
        public readonly ?int $completionDate = null,
    ) {}
}
