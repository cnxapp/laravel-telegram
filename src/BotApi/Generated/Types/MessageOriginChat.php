<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MessageOriginChat extends MessageOrigin
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'sender_chat' => ['property' => 'senderChat', 'type' => 'Chat', 'optional' => false],
        'author_signature' => ['property' => 'authorSignature', 'type' => 'String', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'chat',
    ];

    public function __construct(
        public readonly string $type,
        public readonly int $date,
        public readonly Chat $senderChat,
        public readonly ?string $authorSignature = null,
    ) {}
}
