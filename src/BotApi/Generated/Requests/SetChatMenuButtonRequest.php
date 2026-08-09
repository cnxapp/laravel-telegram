<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\MenuButtonCommands;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MenuButtonDefault;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MenuButtonWebApp;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetChatMenuButtonRequest extends Request
{
    protected const METHOD = 'setChatMenuButton';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer', 'optional' => true],
        'menu_button' => ['property' => 'menuButton', 'type' => 'MenuButton', 'optional' => true],
    ];

    public function __construct(
        public readonly ?int $chatId = null,
        public readonly MenuButtonCommands|MenuButtonWebApp|MenuButtonDefault|null $menuButton = null,
    ) {}
}
