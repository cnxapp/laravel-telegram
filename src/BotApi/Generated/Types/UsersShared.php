<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class UsersShared extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'request_id' => ['property' => 'requestId', 'type' => 'Integer', 'optional' => false],
        'users' => ['property' => 'users', 'type' => 'Array of SharedUser', 'optional' => false],
    ];

    /**
     * @param  list<SharedUser>  $users
     */
    public function __construct(
        public readonly int $requestId,
        public readonly array $users,
    ) {}
}
