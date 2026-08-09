<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class GiftInfo extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'gift' => ['property' => 'gift', 'type' => 'Gift', 'optional' => false],
        'owned_gift_id' => ['property' => 'ownedGiftId', 'type' => 'String', 'optional' => true],
        'convert_star_count' => ['property' => 'convertStarCount', 'type' => 'Integer', 'optional' => true],
        'prepaid_upgrade_star_count' => ['property' => 'prepaidUpgradeStarCount', 'type' => 'Integer', 'optional' => true],
        'is_upgrade_separate' => ['property' => 'isUpgradeSeparate', 'type' => 'True', 'optional' => true],
        'can_be_upgraded' => ['property' => 'canBeUpgraded', 'type' => 'True', 'optional' => true],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => true],
        'entities' => ['property' => 'entities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'is_private' => ['property' => 'isPrivate', 'type' => 'True', 'optional' => true],
        'unique_gift_number' => ['property' => 'uniqueGiftNumber', 'type' => 'Integer', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $entities
     */
    public function __construct(
        public readonly Gift $gift,
        public readonly ?string $ownedGiftId = null,
        public readonly ?int $convertStarCount = null,
        public readonly ?int $prepaidUpgradeStarCount = null,
        public readonly ?bool $isUpgradeSeparate = null,
        public readonly ?bool $canBeUpgraded = null,
        public readonly ?string $text = null,
        public readonly ?array $entities = null,
        public readonly ?bool $isPrivate = null,
        public readonly ?int $uniqueGiftNumber = null,
    ) {}
}
