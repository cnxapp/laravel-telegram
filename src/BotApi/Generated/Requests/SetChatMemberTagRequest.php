<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetChatMemberTagRequest extends Request
{
    protected const METHOD = 'setChatMemberTag';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'tag' => ['property' => 'tag', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $userId,
        public readonly ?string $tag = null,
    ) {}
}
