<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputTextMessageContent extends InputMessageContent
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'message_text' => ['property' => 'messageText', 'type' => 'String', 'optional' => false],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'entities' => ['property' => 'entities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'link_preview_options' => ['property' => 'linkPreviewOptions', 'type' => 'LinkPreviewOptions', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $entities
     */
    public function __construct(
        public readonly string $messageText,
        public readonly ?string $parseMode = null,
        public readonly ?array $entities = null,
        public readonly ?LinkPreviewOptions $linkPreviewOptions = null,
    ) {}
}
