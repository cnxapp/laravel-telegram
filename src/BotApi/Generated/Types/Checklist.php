<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Checklist extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'title_entities' => ['property' => 'titleEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'tasks' => ['property' => 'tasks', 'type' => 'Array of ChecklistTask', 'optional' => false],
        'others_can_add_tasks' => ['property' => 'othersCanAddTasks', 'type' => 'True', 'optional' => true],
        'others_can_mark_tasks_as_done' => ['property' => 'othersCanMarkTasksAsDone', 'type' => 'True', 'optional' => true],
    ];

    /**
     * @param  list<ChecklistTask>  $tasks
     * @param  list<MessageEntity>|null  $titleEntities
     */
    public function __construct(
        public readonly string $title,
        public readonly array $tasks,
        public readonly ?array $titleEntities = null,
        public readonly ?bool $othersCanAddTasks = null,
        public readonly ?bool $othersCanMarkTasksAsDone = null,
    ) {}
}
