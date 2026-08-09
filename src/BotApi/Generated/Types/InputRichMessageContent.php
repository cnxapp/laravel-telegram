<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichMessageContent extends InputMessageContent
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'rich_message' => ['property' => 'richMessage', 'type' => 'InputRichMessage', 'optional' => false],
    ];

    public function __construct(
        public readonly InputRichMessage $richMessage,
    ) {}
}
