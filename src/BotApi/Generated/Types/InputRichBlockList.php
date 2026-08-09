<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichBlockList extends InputRichBlock
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'items' => ['property' => 'items', 'type' => 'Array of InputRichBlockListItem', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'list',
    ];

    /**
     * @param  list<InputRichBlockListItem>  $items
     */
    public function __construct(
        public readonly string $type,
        public readonly array $items,
    ) {}
}
