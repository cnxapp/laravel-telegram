<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageEntity;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendMessageDraftRequest extends Request
{
    protected const METHOD = 'sendMessageDraft';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'draft_id' => ['property' => 'draftId', 'type' => 'Integer', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => true],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'entities' => ['property' => 'entities', 'type' => 'Array of MessageEntity', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $entities
     */
    public function __construct(
        public readonly int $chatId,
        public readonly int $draftId,
        public readonly ?int $messageThreadId = null,
        public readonly ?string $text = null,
        public readonly ?string $parseMode = null,
        public readonly ?array $entities = null,
    ) {}
}
