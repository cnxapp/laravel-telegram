<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Gift extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'sticker' => ['property' => 'sticker', 'type' => 'Sticker', 'optional' => false],
        'star_count' => ['property' => 'starCount', 'type' => 'Integer', 'optional' => false],
        'upgrade_star_count' => ['property' => 'upgradeStarCount', 'type' => 'Integer', 'optional' => true],
        'is_premium' => ['property' => 'isPremium', 'type' => 'True', 'optional' => true],
        'has_colors' => ['property' => 'hasColors', 'type' => 'True', 'optional' => true],
        'total_count' => ['property' => 'totalCount', 'type' => 'Integer', 'optional' => true],
        'remaining_count' => ['property' => 'remainingCount', 'type' => 'Integer', 'optional' => true],
        'personal_total_count' => ['property' => 'personalTotalCount', 'type' => 'Integer', 'optional' => true],
        'personal_remaining_count' => ['property' => 'personalRemainingCount', 'type' => 'Integer', 'optional' => true],
        'background' => ['property' => 'background', 'type' => 'GiftBackground', 'optional' => true],
        'unique_gift_variant_count' => ['property' => 'uniqueGiftVariantCount', 'type' => 'Integer', 'optional' => true],
        'publisher_chat' => ['property' => 'publisherChat', 'type' => 'Chat', 'optional' => true],
    ];

    public function __construct(
        public readonly string $id,
        public readonly Sticker $sticker,
        public readonly int $starCount,
        public readonly ?int $upgradeStarCount = null,
        public readonly ?bool $isPremium = null,
        public readonly ?bool $hasColors = null,
        public readonly ?int $totalCount = null,
        public readonly ?int $remainingCount = null,
        public readonly ?int $personalTotalCount = null,
        public readonly ?int $personalRemainingCount = null,
        public readonly ?GiftBackground $background = null,
        public readonly ?int $uniqueGiftVariantCount = null,
        public readonly ?Chat $publisherChat = null,
    ) {}
}
