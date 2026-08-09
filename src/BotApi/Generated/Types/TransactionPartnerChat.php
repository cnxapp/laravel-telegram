<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class TransactionPartnerChat extends TransactionPartner
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'gift' => ['property' => 'gift', 'type' => 'Gift', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'chat',
    ];

    public function __construct(
        public readonly string $type,
        public readonly Chat $chat,
        public readonly ?Gift $gift = null,
    ) {}
}
