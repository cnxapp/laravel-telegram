<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class EncryptedPassportElement extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'data' => ['property' => 'data', 'type' => 'String', 'optional' => true],
        'phone_number' => ['property' => 'phoneNumber', 'type' => 'String', 'optional' => true],
        'email' => ['property' => 'email', 'type' => 'String', 'optional' => true],
        'files' => ['property' => 'files', 'type' => 'Array of PassportFile', 'optional' => true],
        'front_side' => ['property' => 'frontSide', 'type' => 'PassportFile', 'optional' => true],
        'reverse_side' => ['property' => 'reverseSide', 'type' => 'PassportFile', 'optional' => true],
        'selfie' => ['property' => 'selfie', 'type' => 'PassportFile', 'optional' => true],
        'translation' => ['property' => 'translation', 'type' => 'Array of PassportFile', 'optional' => true],
        'hash' => ['property' => 'hash', 'type' => 'String', 'optional' => false],
    ];

    /**
     * @param  list<PassportFile>|null  $files
     * @param  list<PassportFile>|null  $translation
     */
    public function __construct(
        public readonly string $type,
        public readonly string $hash,
        public readonly ?string $data = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $email = null,
        public readonly ?array $files = null,
        public readonly ?PassportFile $frontSide = null,
        public readonly ?PassportFile $reverseSide = null,
        public readonly ?PassportFile $selfie = null,
        public readonly ?array $translation = null,
    ) {}
}
