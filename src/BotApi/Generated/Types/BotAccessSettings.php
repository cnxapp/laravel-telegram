<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BotAccessSettings extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'is_access_restricted' => ['property' => 'isAccessRestricted', 'type' => 'Boolean', 'optional' => false],
        'added_users' => ['property' => 'addedUsers', 'type' => 'Array of User', 'optional' => true],
    ];

    /**
     * @param  list<User>|null  $addedUsers
     */
    public function __construct(
        public readonly bool $isAccessRestricted,
        public readonly ?array $addedUsers = null,
    ) {}
}
