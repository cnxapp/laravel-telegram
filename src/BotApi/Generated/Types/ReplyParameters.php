<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ReplyParameters extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => true],
        'ephemeral_message_id' => ['property' => 'ephemeralMessageId', 'type' => 'Integer', 'optional' => true],
        'allow_sending_without_reply' => ['property' => 'allowSendingWithoutReply', 'type' => 'Boolean', 'optional' => true],
        'quote' => ['property' => 'quote', 'type' => 'String', 'optional' => true],
        'quote_parse_mode' => ['property' => 'quoteParseMode', 'type' => 'String', 'optional' => true],
        'quote_entities' => ['property' => 'quoteEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'quote_position' => ['property' => 'quotePosition', 'type' => 'Integer', 'optional' => true],
        'checklist_task_id' => ['property' => 'checklistTaskId', 'type' => 'Integer', 'optional' => true],
        'poll_option_id' => ['property' => 'pollOptionId', 'type' => 'String', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $quoteEntities
     */
    public function __construct(
        public readonly ?int $messageId = null,
        public readonly int|string|null $chatId = null,
        public readonly ?int $ephemeralMessageId = null,
        public readonly ?bool $allowSendingWithoutReply = null,
        public readonly ?string $quote = null,
        public readonly ?string $quoteParseMode = null,
        public readonly ?array $quoteEntities = null,
        public readonly ?int $quotePosition = null,
        public readonly ?int $checklistTaskId = null,
        public readonly ?string $pollOptionId = null,
    ) {}
}
