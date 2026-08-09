<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetWebhookInfoRequest extends Request
{
    protected const METHOD = 'getWebhookInfo';

    protected const RETURN_TYPE = 'WebhookInfo';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [];

    public function __construct() {}
}
