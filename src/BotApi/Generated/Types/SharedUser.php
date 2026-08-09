<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class SharedUser extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'first_name' => ['property' => 'firstName', 'type' => 'String', 'optional' => true],
        'last_name' => ['property' => 'lastName', 'type' => 'String', 'optional' => true],
        'username' => ['property' => 'username', 'type' => 'String', 'optional' => true],
        'photo' => ['property' => 'photo', 'type' => 'Array of PhotoSize', 'optional' => true],
    ];

    /**
     * @param  list<PhotoSize>|null  $photo
     */
    public function __construct(
        public readonly int $userId,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $username = null,
        public readonly ?array $photo = null,
    ) {}
}
