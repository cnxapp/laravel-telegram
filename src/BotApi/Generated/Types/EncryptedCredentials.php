<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class EncryptedCredentials extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'data' => ['property' => 'data', 'type' => 'String', 'optional' => false],
        'hash' => ['property' => 'hash', 'type' => 'String', 'optional' => false],
        'secret' => ['property' => 'secret', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $data,
        public readonly string $hash,
        public readonly string $secret,
    ) {}
}
