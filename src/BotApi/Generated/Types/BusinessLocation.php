<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BusinessLocation extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'address' => ['property' => 'address', 'type' => 'String', 'optional' => false],
        'location' => ['property' => 'location', 'type' => 'Location', 'optional' => true],
    ];

    public function __construct(
        public readonly string $address,
        public readonly ?Location $location = null,
    ) {}
}
