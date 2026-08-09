<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetGameHighScoresRequest extends Request
{
    protected const METHOD = 'getGameHighScores';

    protected const RETURN_TYPE = 'Array of GameHighScore';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer', 'optional' => true],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => true],
        'inline_message_id' => ['property' => 'inlineMessageId', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly ?int $chatId = null,
        public readonly ?int $messageId = null,
        public readonly ?string $inlineMessageId = null,
    ) {}
}
