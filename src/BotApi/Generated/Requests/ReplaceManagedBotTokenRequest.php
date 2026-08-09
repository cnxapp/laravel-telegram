<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class ReplaceManagedBotTokenRequest extends Request
{
    protected const METHOD = 'replaceManagedBotToken';

    protected const RETURN_TYPE = 'String';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int $userId,
    ) {}
}
