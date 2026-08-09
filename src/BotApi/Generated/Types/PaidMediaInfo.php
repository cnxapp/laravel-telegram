<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PaidMediaInfo extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'star_count' => ['property' => 'starCount', 'type' => 'Integer', 'optional' => false],
        'paid_media' => ['property' => 'paidMedia', 'type' => 'Array of PaidMedia', 'optional' => false],
    ];

    /**
     * @param  list<PaidMediaLivePhoto|PaidMediaPhoto|PaidMediaPreview|PaidMediaVideo>  $paidMedia
     */
    public function __construct(
        public readonly int $starCount,
        public readonly array $paidMedia,
    ) {}
}
