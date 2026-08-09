<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class VideoChatParticipantsInvited extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'users' => ['property' => 'users', 'type' => 'Array of User', 'optional' => false],
    ];

    /**
     * @param  list<User>  $users
     */
    public function __construct(
        public readonly array $users,
    ) {}
}
