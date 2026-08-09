<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PaidMediaLivePhoto extends PaidMedia
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'live_photo' => ['property' => 'livePhoto', 'type' => 'LivePhoto', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'live_photo',
    ];

    public function __construct(
        public readonly string $type,
        public readonly LivePhoto $livePhoto,
    ) {}
}
