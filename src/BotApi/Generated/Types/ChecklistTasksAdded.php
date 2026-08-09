<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChecklistTasksAdded extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'checklist_message' => ['property' => 'checklistMessage', 'type' => 'Message', 'optional' => true],
        'tasks' => ['property' => 'tasks', 'type' => 'Array of ChecklistTask', 'optional' => false],
    ];

    /**
     * @param  list<ChecklistTask>  $tasks
     */
    public function __construct(
        public readonly array $tasks,
        public readonly ?Message $checklistMessage = null,
    ) {}
}
