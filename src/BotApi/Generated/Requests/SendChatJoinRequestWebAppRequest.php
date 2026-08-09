<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendChatJoinRequestWebAppRequest extends Request
{
    protected const METHOD = 'sendChatJoinRequestWebApp';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_join_request_query_id' => ['property' => 'chatJoinRequestQueryId', 'type' => 'String', 'optional' => false],
        'web_app_url' => ['property' => 'webAppUrl', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $chatJoinRequestQueryId,
        public readonly string $webAppUrl,
    ) {}
}
