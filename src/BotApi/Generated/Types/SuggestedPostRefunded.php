<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class SuggestedPostRefunded extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'suggested_post_message' => ['property' => 'suggestedPostMessage', 'type' => 'Message', 'optional' => true],
        'reason' => ['property' => 'reason', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $reason,
        public readonly ?Message $suggestedPostMessage = null,
    ) {}
}
