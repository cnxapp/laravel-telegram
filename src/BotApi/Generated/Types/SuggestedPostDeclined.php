<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class SuggestedPostDeclined extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'suggested_post_message' => ['property' => 'suggestedPostMessage', 'type' => 'Message', 'optional' => true],
        'comment' => ['property' => 'comment', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly ?Message $suggestedPostMessage = null,
        public readonly ?string $comment = null,
    ) {}
}
