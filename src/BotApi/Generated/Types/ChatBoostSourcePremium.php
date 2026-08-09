<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatBoostSourcePremium extends ChatBoostSource
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'source' => ['property' => 'source', 'type' => 'String', 'optional' => false],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'source' => 'premium',
    ];

    public function __construct(
        public readonly string $source,
        public readonly User $user,
    ) {}
}
