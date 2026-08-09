<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Giveaway extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chats' => ['property' => 'chats', 'type' => 'Array of Chat', 'optional' => false],
        'winners_selection_date' => ['property' => 'winnersSelectionDate', 'type' => 'Integer', 'optional' => false],
        'winner_count' => ['property' => 'winnerCount', 'type' => 'Integer', 'optional' => false],
        'only_new_members' => ['property' => 'onlyNewMembers', 'type' => 'True', 'optional' => true],
        'has_public_winners' => ['property' => 'hasPublicWinners', 'type' => 'True', 'optional' => true],
        'prize_description' => ['property' => 'prizeDescription', 'type' => 'String', 'optional' => true],
        'country_codes' => ['property' => 'countryCodes', 'type' => 'Array of String', 'optional' => true],
        'prize_star_count' => ['property' => 'prizeStarCount', 'type' => 'Integer', 'optional' => true],
        'premium_subscription_month_count' => ['property' => 'premiumSubscriptionMonthCount', 'type' => 'Integer', 'optional' => true],
    ];

    /**
     * @param  list<Chat>  $chats
     * @param  list<string>|null  $countryCodes
     */
    public function __construct(
        public readonly array $chats,
        public readonly int $winnersSelectionDate,
        public readonly int $winnerCount,
        public readonly ?bool $onlyNewMembers = null,
        public readonly ?bool $hasPublicWinners = null,
        public readonly ?string $prizeDescription = null,
        public readonly ?array $countryCodes = null,
        public readonly ?int $prizeStarCount = null,
        public readonly ?int $premiumSubscriptionMonthCount = null,
    ) {}
}
