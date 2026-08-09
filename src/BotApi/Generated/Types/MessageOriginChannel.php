<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MessageOriginChannel extends MessageOrigin
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'date' => ['property' => 'date', 'type' => 'Integer', 'optional' => false],
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => false],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
        'author_signature' => ['property' => 'authorSignature', 'type' => 'String', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'channel',
    ];

    public function __construct(
        public readonly string $type,
        public readonly int $date,
        public readonly Chat $chat,
        public readonly int $messageId,
        public readonly ?string $authorSignature = null,
    ) {}
}
