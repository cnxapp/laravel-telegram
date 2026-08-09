<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputContactMessageContent extends InputMessageContent
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'phone_number' => ['property' => 'phoneNumber', 'type' => 'String', 'optional' => false],
        'first_name' => ['property' => 'firstName', 'type' => 'String', 'optional' => false],
        'last_name' => ['property' => 'lastName', 'type' => 'String', 'optional' => true],
        'vcard' => ['property' => 'vcard', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly string $phoneNumber,
        public readonly string $firstName,
        public readonly ?string $lastName = null,
        public readonly ?string $vcard = null,
    ) {}
}
