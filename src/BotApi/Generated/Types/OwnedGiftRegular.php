<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class OwnedGiftRegular extends OwnedGift
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'gift' => ['property' => 'gift', 'type' => 'Gift', 'optional' => false],
        'owned_gift_id' => ['property' => 'ownedGiftId', 'type' => 'String', 'optional' => true],
        'sender_user' => ['property' => 'senderUser', 'type' => 'User', 'optional' => true],
        'send_date' => ['property' => 'sendDate', 'type' => 'Integer', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => true],
        'entities' => ['property' => 'entities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'is_private' => ['property' => 'isPrivate', 'type' => 'True', 'optional' => true],
        'is_saved' => ['property' => 'isSaved', 'type' => 'True', 'optional' => true],
        'can_be_upgraded' => ['property' => 'canBeUpgraded', 'type' => 'True', 'optional' => true],
        'was_refunded' => ['property' => 'wasRefunded', 'type' => 'True', 'optional' => true],
        'convert_star_count' => ['property' => 'convertStarCount', 'type' => 'Integer', 'optional' => true],
        'prepaid_upgrade_star_count' => ['property' => 'prepaidUpgradeStarCount', 'type' => 'Integer', 'optional' => true],
        'is_upgrade_separate' => ['property' => 'isUpgradeSeparate', 'type' => 'True', 'optional' => true],
        'unique_gift_number' => ['property' => 'uniqueGiftNumber', 'type' => 'Integer', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'regular',
    ];

    /**
     * @param  list<MessageEntity>|null  $entities
     */
    public function __construct(
        public readonly string $type,
        public readonly Gift $gift,
        public readonly int $sendDate,
        public readonly ?string $ownedGiftId = null,
        public readonly ?User $senderUser = null,
        public readonly ?string $text = null,
        public readonly ?array $entities = null,
        public readonly ?bool $isPrivate = null,
        public readonly ?bool $isSaved = null,
        public readonly ?bool $canBeUpgraded = null,
        public readonly ?bool $wasRefunded = null,
        public readonly ?int $convertStarCount = null,
        public readonly ?int $prepaidUpgradeStarCount = null,
        public readonly ?bool $isUpgradeSeparate = null,
        public readonly ?int $uniqueGiftNumber = null,
    ) {}
}
