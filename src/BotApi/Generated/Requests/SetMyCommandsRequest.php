<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommand;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeAllChatAdministrators;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeAllGroupChats;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeAllPrivateChats;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeChat;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeChatAdministrators;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeChatMember;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommandScopeDefault;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetMyCommandsRequest extends Request
{
    protected const METHOD = 'setMyCommands';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'commands' => ['property' => 'commands', 'type' => 'Array of BotCommand', 'optional' => false],
        'scope' => ['property' => 'scope', 'type' => 'BotCommandScope', 'optional' => true],
        'language_code' => ['property' => 'languageCode', 'type' => 'String', 'optional' => true],
    ];

    /**
     * @param  list<BotCommand>  $commands
     */
    public function __construct(
        public readonly array $commands,
        public readonly BotCommandScopeDefault|BotCommandScopeAllPrivateChats|BotCommandScopeAllGroupChats|BotCommandScopeAllChatAdministrators|BotCommandScopeChat|BotCommandScopeChatAdministrators|BotCommandScopeChatMember|null $scope = null,
        public readonly ?string $languageCode = null,
    ) {}
}
