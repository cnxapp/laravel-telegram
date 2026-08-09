<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BotSubscriptionUpdated extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => false],
        'invoice_payload' => ['property' => 'invoicePayload', 'type' => 'String', 'optional' => false],
        'state' => ['property' => 'state', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly User $user,
        public readonly string $invoicePayload,
        public readonly string $state,
    ) {}
}
