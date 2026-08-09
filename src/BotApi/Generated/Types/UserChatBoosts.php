<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class UserChatBoosts extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'boosts' => ['property' => 'boosts', 'type' => 'Array of ChatBoost', 'optional' => false],
    ];

    /**
     * @param  list<ChatBoost>  $boosts
     */
    public function __construct(
        public readonly array $boosts,
    ) {}
}
