<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class UserProfilePhotos extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'total_count' => ['property' => 'totalCount', 'type' => 'Integer', 'optional' => false],
        'photos' => ['property' => 'photos', 'type' => 'Array of Array of PhotoSize', 'optional' => false],
    ];

    /**
     * @param  list<list<PhotoSize>>  $photos
     */
    public function __construct(
        public readonly int $totalCount,
        public readonly array $photos,
    ) {}
}
