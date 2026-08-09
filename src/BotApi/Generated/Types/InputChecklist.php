<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputChecklist extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'title_entities' => ['property' => 'titleEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'tasks' => ['property' => 'tasks', 'type' => 'Array of InputChecklistTask', 'optional' => false],
        'others_can_add_tasks' => ['property' => 'othersCanAddTasks', 'type' => 'Boolean', 'optional' => true],
        'others_can_mark_tasks_as_done' => ['property' => 'othersCanMarkTasksAsDone', 'type' => 'Boolean', 'optional' => true],
    ];

    /**
     * @param  list<InputChecklistTask>  $tasks
     * @param  list<MessageEntity>|null  $titleEntities
     */
    public function __construct(
        public readonly string $title,
        public readonly array $tasks,
        public readonly ?string $parseMode = null,
        public readonly ?array $titleEntities = null,
        public readonly ?bool $othersCanAddTasks = null,
        public readonly ?bool $othersCanMarkTasksAsDone = null,
    ) {}
}
