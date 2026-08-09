<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Chat extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'Integer', 'optional' => false],
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => true],
        'username' => ['property' => 'username', 'type' => 'String', 'optional' => true],
        'first_name' => ['property' => 'firstName', 'type' => 'String', 'optional' => true],
        'last_name' => ['property' => 'lastName', 'type' => 'String', 'optional' => true],
        'is_forum' => ['property' => 'isForum', 'type' => 'True', 'optional' => true],
        'is_direct_messages' => ['property' => 'isDirectMessages', 'type' => 'True', 'optional' => true],
    ];

    public function __construct(
        public readonly int $id,
        public readonly string $type,
        public readonly ?string $title = null,
        public readonly ?string $username = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?bool $isForum = null,
        public readonly ?bool $isDirectMessages = null,
    ) {}
}
