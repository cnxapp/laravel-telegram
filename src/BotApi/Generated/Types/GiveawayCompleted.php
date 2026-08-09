<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class GiveawayCompleted extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'winner_count' => ['property' => 'winnerCount', 'type' => 'Integer', 'optional' => false],
        'unclaimed_prize_count' => ['property' => 'unclaimedPrizeCount', 'type' => 'Integer', 'optional' => true],
        'giveaway_message' => ['property' => 'giveawayMessage', 'type' => 'Message', 'optional' => true],
        'is_star_giveaway' => ['property' => 'isStarGiveaway', 'type' => 'True', 'optional' => true],
    ];

    public function __construct(
        public readonly int $winnerCount,
        public readonly ?int $unclaimedPrizeCount = null,
        public readonly ?Message $giveawayMessage = null,
        public readonly ?bool $isStarGiveaway = null,
    ) {}
}
