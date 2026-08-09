<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetGameScoreRequest extends Request
{
    protected const METHOD = 'setGameScore';

    protected const RETURN_TYPE = 'Message or Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'score' => ['property' => 'score', 'type' => 'Integer', 'optional' => false],
        'force' => ['property' => 'force', 'type' => 'Boolean', 'optional' => true],
        'disable_edit_message' => ['property' => 'disableEditMessage', 'type' => 'Boolean', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer', 'optional' => true],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => true],
        'inline_message_id' => ['property' => 'inlineMessageId', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly int $score,
        public readonly ?bool $force = null,
        public readonly ?bool $disableEditMessage = null,
        public readonly ?int $chatId = null,
        public readonly ?int $messageId = null,
        public readonly ?string $inlineMessageId = null,
    ) {}
}
