<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PaidMediaPurchased extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'from' => ['property' => 'from', 'type' => 'User', 'optional' => false],
        'paid_media_payload' => ['property' => 'paidMediaPayload', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly User $from,
        public readonly string $paidMediaPayload,
    ) {}
}
