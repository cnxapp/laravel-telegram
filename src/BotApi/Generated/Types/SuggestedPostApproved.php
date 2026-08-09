<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class SuggestedPostApproved extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'suggested_post_message' => ['property' => 'suggestedPostMessage', 'type' => 'Message', 'optional' => true],
        'price' => ['property' => 'price', 'type' => 'SuggestedPostPrice', 'optional' => true],
        'send_date' => ['property' => 'sendDate', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int $sendDate,
        public readonly ?Message $suggestedPostMessage = null,
        public readonly ?SuggestedPostPrice $price = null,
    ) {}
}
