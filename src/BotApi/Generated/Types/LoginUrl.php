<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class LoginUrl extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'url' => ['property' => 'url', 'type' => 'String', 'optional' => false],
        'forward_text' => ['property' => 'forwardText', 'type' => 'String', 'optional' => true],
        'bot_username' => ['property' => 'botUsername', 'type' => 'String', 'optional' => true],
        'request_write_access' => ['property' => 'requestWriteAccess', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly string $url,
        public readonly ?string $forwardText = null,
        public readonly ?string $botUsername = null,
        public readonly ?bool $requestWriteAccess = null,
    ) {}
}
