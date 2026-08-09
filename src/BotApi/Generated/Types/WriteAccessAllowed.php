<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class WriteAccessAllowed extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'from_request' => ['property' => 'fromRequest', 'type' => 'Boolean', 'optional' => true],
        'web_app_name' => ['property' => 'webAppName', 'type' => 'String', 'optional' => true],
        'from_attachment_menu' => ['property' => 'fromAttachmentMenu', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly ?bool $fromRequest = null,
        public readonly ?string $webAppName = null,
        public readonly ?bool $fromAttachmentMenu = null,
    ) {}
}
