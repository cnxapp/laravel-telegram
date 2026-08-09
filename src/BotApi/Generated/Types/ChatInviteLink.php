<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ChatInviteLink extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'invite_link' => ['property' => 'inviteLink', 'type' => 'String', 'optional' => false],
        'creator' => ['property' => 'creator', 'type' => 'User', 'optional' => false],
        'creates_join_request' => ['property' => 'createsJoinRequest', 'type' => 'Boolean', 'optional' => false],
        'is_primary' => ['property' => 'isPrimary', 'type' => 'Boolean', 'optional' => false],
        'is_revoked' => ['property' => 'isRevoked', 'type' => 'Boolean', 'optional' => false],
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => true],
        'expire_date' => ['property' => 'expireDate', 'type' => 'Integer', 'optional' => true],
        'member_limit' => ['property' => 'memberLimit', 'type' => 'Integer', 'optional' => true],
        'pending_join_request_count' => ['property' => 'pendingJoinRequestCount', 'type' => 'Integer', 'optional' => true],
        'subscription_period' => ['property' => 'subscriptionPeriod', 'type' => 'Integer', 'optional' => true],
        'subscription_price' => ['property' => 'subscriptionPrice', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly string $inviteLink,
        public readonly User $creator,
        public readonly bool $createsJoinRequest,
        public readonly bool $isPrimary,
        public readonly bool $isRevoked,
        public readonly ?string $name = null,
        public readonly ?int $expireDate = null,
        public readonly ?int $memberLimit = null,
        public readonly ?int $pendingJoinRequestCount = null,
        public readonly ?int $subscriptionPeriod = null,
        public readonly ?int $subscriptionPrice = null,
    ) {}
}
