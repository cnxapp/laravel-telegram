<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class KeyboardButtonRequestManagedBot extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'request_id' => ['property' => 'requestId', 'type' => 'Integer', 'optional' => false],
        'suggested_name' => ['property' => 'suggestedName', 'type' => 'String', 'optional' => true],
        'suggested_username' => ['property' => 'suggestedUsername', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly int $requestId,
        public readonly ?string $suggestedName = null,
        public readonly ?string $suggestedUsername = null,
    ) {}
}
