<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChecklistTasksDone extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'checklist_message' => ['property' => 'checklistMessage', 'type' => 'Message', 'optional' => true],
        'marked_as_done_task_ids' => ['property' => 'markedAsDoneTaskIds', 'type' => 'Array of Integer', 'optional' => true],
        'marked_as_not_done_task_ids' => ['property' => 'markedAsNotDoneTaskIds', 'type' => 'Array of Integer', 'optional' => true],
    ];

    /**
     * @param  list<int>|null  $markedAsDoneTaskIds
     * @param  list<int>|null  $markedAsNotDoneTaskIds
     */
    public function __construct(
        public readonly ?Message $checklistMessage = null,
        public readonly ?array $markedAsDoneTaskIds = null,
        public readonly ?array $markedAsNotDoneTaskIds = null,
    ) {}
}
