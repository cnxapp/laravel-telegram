<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PassportData extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'data' => ['property' => 'data', 'type' => 'Array of EncryptedPassportElement', 'optional' => false],
        'credentials' => ['property' => 'credentials', 'type' => 'EncryptedCredentials', 'optional' => false],
    ];

    /**
     * @param  list<EncryptedPassportElement>  $data
     */
    public function __construct(
        public readonly array $data,
        public readonly EncryptedCredentials $credentials,
    ) {}
}
