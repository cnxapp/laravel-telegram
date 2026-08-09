<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class GiveawayCreated extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'prize_star_count' => ['property' => 'prizeStarCount', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly ?int $prizeStarCount = null,
    ) {}
}
