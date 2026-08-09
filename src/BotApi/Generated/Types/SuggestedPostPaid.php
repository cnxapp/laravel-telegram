<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class SuggestedPostPaid extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'suggested_post_message' => ['property' => 'suggestedPostMessage', 'type' => 'Message', 'optional' => true],
        'currency' => ['property' => 'currency', 'type' => 'String', 'optional' => false],
        'amount' => ['property' => 'amount', 'type' => 'Integer', 'optional' => true],
        'star_amount' => ['property' => 'starAmount', 'type' => 'StarAmount', 'optional' => true],
    ];

    public function __construct(
        public readonly string $currency,
        public readonly ?Message $suggestedPostMessage = null,
        public readonly ?int $amount = null,
        public readonly ?StarAmount $starAmount = null,
    ) {}
}
