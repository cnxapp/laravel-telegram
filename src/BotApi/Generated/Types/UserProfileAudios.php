<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class UserProfileAudios extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'total_count' => ['property' => 'totalCount', 'type' => 'Integer', 'optional' => false],
        'audios' => ['property' => 'audios', 'type' => 'Array of Audio', 'optional' => false],
    ];

    /**
     * @param  list<Audio>  $audios
     */
    public function __construct(
        public readonly int $totalCount,
        public readonly array $audios,
    ) {}
}
