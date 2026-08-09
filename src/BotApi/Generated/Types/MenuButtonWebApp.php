<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class MenuButtonWebApp extends MenuButton
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => false],
        'web_app' => ['property' => 'webApp', 'type' => 'WebAppInfo', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'web_app',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string $text,
        public readonly WebAppInfo $webApp,
    ) {}
}
