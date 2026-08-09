<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PaidMediaPhoto extends PaidMedia
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'photo' => ['property' => 'photo', 'type' => 'Array of PhotoSize', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'photo',
    ];

    /**
     * @param  list<PhotoSize>  $photo
     */
    public function __construct(
        public readonly string $type,
        public readonly array $photo,
    ) {}
}
