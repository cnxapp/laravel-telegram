<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BotCommand extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'command' => ['property' => 'command', 'type' => 'String', 'optional' => false],
        'description' => ['property' => 'description', 'type' => 'String', 'optional' => false],
        'is_ephemeral' => ['property' => 'isEphemeral', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly string $command,
        public readonly string $description,
        public readonly ?bool $isEphemeral = null,
    ) {}
}
