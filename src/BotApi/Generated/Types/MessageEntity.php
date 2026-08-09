<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MessageEntity extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'offset' => ['property' => 'offset', 'type' => 'Integer', 'optional' => false],
        'length' => ['property' => 'length', 'type' => 'Integer', 'optional' => false],
        'url' => ['property' => 'url', 'type' => 'String', 'optional' => true],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => true],
        'language' => ['property' => 'language', 'type' => 'String', 'optional' => true],
        'custom_emoji_id' => ['property' => 'customEmojiId', 'type' => 'String', 'optional' => true],
        'unix_time' => ['property' => 'unixTime', 'type' => 'Integer', 'optional' => true],
        'date_time_format' => ['property' => 'dateTimeFormat', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly string $type,
        public readonly int $offset,
        public readonly int $length,
        public readonly ?string $url = null,
        public readonly ?User $user = null,
        public readonly ?string $language = null,
        public readonly ?string $customEmojiId = null,
        public readonly ?int $unixTime = null,
        public readonly ?string $dateTimeFormat = null,
    ) {}
}
