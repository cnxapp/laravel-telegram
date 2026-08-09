<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class KeyboardButtonRequestUsers extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'request_id' => ['property' => 'requestId', 'type' => 'Integer', 'optional' => false],
        'user_is_bot' => ['property' => 'userIsBot', 'type' => 'Boolean', 'optional' => true],
        'user_is_premium' => ['property' => 'userIsPremium', 'type' => 'Boolean', 'optional' => true],
        'max_quantity' => ['property' => 'maxQuantity', 'type' => 'Integer', 'optional' => true],
        'request_name' => ['property' => 'requestName', 'type' => 'Boolean', 'optional' => true],
        'request_username' => ['property' => 'requestUsername', 'type' => 'Boolean', 'optional' => true],
        'request_photo' => ['property' => 'requestPhoto', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly int $requestId,
        public readonly ?bool $userIsBot = null,
        public readonly ?bool $userIsPremium = null,
        public readonly ?int $maxQuantity = null,
        public readonly ?bool $requestName = null,
        public readonly ?bool $requestUsername = null,
        public readonly ?bool $requestPhoto = null,
    ) {}
}
