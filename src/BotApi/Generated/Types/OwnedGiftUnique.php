<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class OwnedGiftUnique extends OwnedGift
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'gift' => ['property' => 'gift', 'type' => 'UniqueGift', 'optional' => false],
        'owned_gift_id' => ['property' => 'ownedGiftId', 'type' => 'String', 'optional' => true],
        'sender_user' => ['property' => 'senderUser', 'type' => 'User', 'optional' => true],
        'send_date' => ['property' => 'sendDate', 'type' => 'Integer', 'optional' => false],
        'is_saved' => ['property' => 'isSaved', 'type' => 'True', 'optional' => true],
        'can_be_transferred' => ['property' => 'canBeTransferred', 'type' => 'True', 'optional' => true],
        'transfer_star_count' => ['property' => 'transferStarCount', 'type' => 'Integer', 'optional' => true],
        'next_transfer_date' => ['property' => 'nextTransferDate', 'type' => 'Integer', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'unique',
    ];

    public function __construct(
        public readonly string $type,
        public readonly UniqueGift $gift,
        public readonly int $sendDate,
        public readonly ?string $ownedGiftId = null,
        public readonly ?User $senderUser = null,
        public readonly ?bool $isSaved = null,
        public readonly ?bool $canBeTransferred = null,
        public readonly ?int $transferStarCount = null,
        public readonly ?int $nextTransferDate = null,
    ) {}
}
