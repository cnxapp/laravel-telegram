<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeAllChatAdministrators;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeAllGroupChats;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeAllPrivateChats;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeChat;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeChatAdministrators;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeChatMember;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeDefault;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class DeleteMyCommandsRequest extends Request
{
    protected const METHOD = 'deleteMyCommands';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'scope' => ['property' => 'scope', 'type' => 'BotCommandScope', 'optional' => true],
        'language_code' => ['property' => 'languageCode', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly BotCommandScopeDefault|BotCommandScopeAllPrivateChats|BotCommandScopeAllGroupChats|BotCommandScopeAllChatAdministrators|BotCommandScopeChat|BotCommandScopeChatAdministrators|BotCommandScopeChatMember|null $scope = null,
        public readonly ?string $languageCode = null,
    ) {}
}
