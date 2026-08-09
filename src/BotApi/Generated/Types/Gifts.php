<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Gifts extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'gifts' => ['property' => 'gifts', 'type' => 'Array of Gift', 'optional' => false],
    ];

    /**
     * @param  list<Gift>  $gifts
     */
    public function __construct(
        public readonly array $gifts,
    ) {}
}
