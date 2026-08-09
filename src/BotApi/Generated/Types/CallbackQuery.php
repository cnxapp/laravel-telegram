<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class CallbackQuery extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'from' => ['property' => 'from', 'type' => 'User', 'optional' => false],
        'message' => ['property' => 'message', 'type' => 'MaybeInaccessibleMessage', 'optional' => true],
        'inline_message_id' => ['property' => 'inlineMessageId', 'type' => 'String', 'optional' => true],
        'chat_instance' => ['property' => 'chatInstance', 'type' => 'String', 'optional' => false],
        'data' => ['property' => 'data', 'type' => 'String', 'optional' => true],
        'game_short_name' => ['property' => 'gameShortName', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly string $id,
        public readonly User $from,
        public readonly string $chatInstance,
        public readonly Message|InaccessibleMessage|null $message = null,
        public readonly ?string $inlineMessageId = null,
        public readonly ?string $data = null,
        public readonly ?string $gameShortName = null,
    ) {}
}
