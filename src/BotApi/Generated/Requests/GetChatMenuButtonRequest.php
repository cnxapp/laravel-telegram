<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetChatMenuButtonRequest extends Request
{
    protected const METHOD = 'getChatMenuButton';

    protected const RETURN_TYPE = 'MenuButton';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly ?int $chatId = null,
    ) {}
}
