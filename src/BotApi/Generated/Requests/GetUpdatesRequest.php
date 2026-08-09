<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetUpdatesRequest extends Request
{
    protected const METHOD = 'getUpdates';

    protected const RETURN_TYPE = 'Array of Update';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'offset' => ['property' => 'offset', 'type' => 'Integer', 'optional' => true],
        'limit' => ['property' => 'limit', 'type' => 'Integer', 'optional' => true],
        'timeout' => ['property' => 'timeout', 'type' => 'Integer', 'optional' => true],
        'allowed_updates' => ['property' => 'allowedUpdates', 'type' => 'Array of String', 'optional' => true],
    ];

    /**
     * @param  list<string>|null  $allowedUpdates
     */
    public function __construct(
        public readonly ?int $offset = null,
        public readonly ?int $limit = null,
        public readonly ?int $timeout = null,
        public readonly ?array $allowedUpdates = null,
    ) {}
}
