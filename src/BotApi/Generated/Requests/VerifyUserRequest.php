<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class VerifyUserRequest extends Request
{
    protected const METHOD = 'verifyUser';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'custom_description' => ['property' => 'customDescription', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly ?string $customDescription = null,
    ) {}
}
