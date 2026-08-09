<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InputRichMessage;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendRichMessageDraftRequest extends Request
{
    protected const METHOD = 'sendRichMessageDraft';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer', 'optional' => false],
        'message_thread_id' => ['property' => 'messageThreadId', 'type' => 'Integer', 'optional' => true],
        'draft_id' => ['property' => 'draftId', 'type' => 'Integer', 'optional' => false],
        'rich_message' => ['property' => 'richMessage', 'type' => 'InputRichMessage', 'optional' => false],
    ];

    public function __construct(
        public readonly int $chatId,
        public readonly int $draftId,
        public readonly InputRichMessage $richMessage,
        public readonly ?int $messageThreadId = null,
    ) {}
}
