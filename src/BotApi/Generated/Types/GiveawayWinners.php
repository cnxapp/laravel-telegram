<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class GiveawayWinners extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'giveaway_message_id' => ['property' => 'giveawayMessageId', 'type' => 'Integer', 'optional' => false],
        'winners_selection_date' => ['property' => 'winnersSelectionDate', 'type' => 'Integer', 'optional' => false],
        'winner_count' => ['property' => 'winnerCount', 'type' => 'Integer', 'optional' => false],
        'winners' => ['property' => 'winners', 'type' => 'Array of User', 'optional' => false],
        'additional_chat_count' => ['property' => 'additionalChatCount', 'type' => 'Integer', 'optional' => true],
        'prize_star_count' => ['property' => 'prizeStarCount', 'type' => 'Integer', 'optional' => true],
        'premium_subscription_month_count' => ['property' => 'premiumSubscriptionMonthCount', 'type' => 'Integer', 'optional' => true],
        'unclaimed_prize_count' => ['property' => 'unclaimedPrizeCount', 'type' => 'Integer', 'optional' => true],
        'only_new_members' => ['property' => 'onlyNewMembers', 'type' => 'True', 'optional' => true],
        'was_refunded' => ['property' => 'wasRefunded', 'type' => 'True', 'optional' => true],
        'prize_description' => ['property' => 'prizeDescription', 'type' => 'String', 'optional' => true],
    ];

    /**
     * @param  list<User>  $winners
     */
    public function __construct(
        public readonly Chat $chat,
        public readonly int $giveawayMessageId,
        public readonly int $winnersSelectionDate,
        public readonly int $winnerCount,
        public readonly array $winners,
        public readonly ?int $additionalChatCount = null,
        public readonly ?int $prizeStarCount = null,
        public readonly ?int $premiumSubscriptionMonthCount = null,
        public readonly ?int $unclaimedPrizeCount = null,
        public readonly ?bool $onlyNewMembers = null,
        public readonly ?bool $wasRefunded = null,
        public readonly ?string $prizeDescription = null,
    ) {}
}
