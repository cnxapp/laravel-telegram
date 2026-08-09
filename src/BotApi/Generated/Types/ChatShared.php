<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatShared extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'request_id' => ['property' => 'requestId', 'type' => 'Integer', 'optional' => false],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => true],
        'username' => ['property' => 'username', 'type' => 'String', 'optional' => true],
        'photo' => ['property' => 'photo', 'type' => 'Array of PhotoSize', 'optional' => true],
    ];

    /**
     * @param  list<PhotoSize>|null  $photo
     */
    public function __construct(
        public readonly int $requestId,
        public readonly int $chatId,
        public readonly ?string $title = null,
        public readonly ?string $username = null,
        public readonly ?array $photo = null,
    ) {}
}
