<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetChatAdministratorsRequest extends Request
{
    protected const METHOD = 'getChatAdministrators';

    protected const RETURN_TYPE = 'Array of ChatMember';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'return_bots' => ['property' => 'returnBots', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly ?bool $returnBots = null,
    ) {}
}
