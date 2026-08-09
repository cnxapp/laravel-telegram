<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetStarTransactionsRequest extends Request
{
    protected const METHOD = 'getStarTransactions';

    protected const RETURN_TYPE = 'StarTransactions';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'offset' => ['property' => 'offset', 'type' => 'Integer', 'optional' => true],
        'limit' => ['property' => 'limit', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly ?int $offset = null,
        public readonly ?int $limit = null,
    ) {}
}
