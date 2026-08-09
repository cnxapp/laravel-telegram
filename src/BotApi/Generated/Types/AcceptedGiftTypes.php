<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class AcceptedGiftTypes extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'unlimited_gifts' => ['property' => 'unlimitedGifts', 'type' => 'Boolean', 'optional' => false],
        'limited_gifts' => ['property' => 'limitedGifts', 'type' => 'Boolean', 'optional' => false],
        'unique_gifts' => ['property' => 'uniqueGifts', 'type' => 'Boolean', 'optional' => false],
        'premium_subscription' => ['property' => 'premiumSubscription', 'type' => 'Boolean', 'optional' => false],
        'gifts_from_channels' => ['property' => 'giftsFromChannels', 'type' => 'Boolean', 'optional' => false],
    ];

    public function __construct(
        public readonly bool $unlimitedGifts,
        public readonly bool $limitedGifts,
        public readonly bool $uniqueGifts,
        public readonly bool $premiumSubscription,
        public readonly bool $giftsFromChannels,
    ) {}
}
