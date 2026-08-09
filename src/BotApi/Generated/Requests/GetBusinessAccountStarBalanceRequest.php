<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetBusinessAccountStarBalanceRequest extends Request
{
    protected const METHOD = 'getBusinessAccountStarBalance';

    protected const RETURN_TYPE = 'StarAmount';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
    ) {}
}
