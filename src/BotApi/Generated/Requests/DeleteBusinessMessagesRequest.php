<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class DeleteBusinessMessagesRequest extends Request
{
    protected const METHOD = 'deleteBusinessMessages';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'message_ids' => ['property' => 'messageIds', 'type' => 'Array of Integer', 'optional' => false],
    ];

    /**
     * @param  list<int>  $messageIds
     */
    public function __construct(
        public readonly string $businessConnectionId,
        public readonly array $messageIds,
    ) {}
}
