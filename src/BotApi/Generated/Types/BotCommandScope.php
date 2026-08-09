<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class BotCommandScope extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        BotCommandScopeDefault::class,
        BotCommandScopeAllPrivateChats::class,
        BotCommandScopeAllGroupChats::class,
        BotCommandScopeAllChatAdministrators::class,
        BotCommandScopeChat::class,
        BotCommandScopeChatAdministrators::class,
        BotCommandScopeChatMember::class,
    ];
}
