<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatBoostSourceGiveaway extends ChatBoostSource
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'source' => ['property' => 'source', 'type' => 'String', 'optional' => false],
        'giveaway_message_id' => ['property' => 'giveawayMessageId', 'type' => 'Integer', 'optional' => false],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => true],
        'prize_star_count' => ['property' => 'prizeStarCount', 'type' => 'Integer', 'optional' => true],
        'is_unclaimed' => ['property' => 'isUnclaimed', 'type' => 'True', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'source' => 'giveaway',
    ];

    public function __construct(
        public readonly string $source,
        public readonly int $giveawayMessageId,
        public readonly ?User $user = null,
        public readonly ?int $prizeStarCount = null,
        public readonly ?bool $isUnclaimed = null,
    ) {}
}
