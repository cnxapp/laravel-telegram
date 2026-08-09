<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class DeleteWebhookRequest extends Request
{
    protected const METHOD = 'deleteWebhook';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'drop_pending_updates' => ['property' => 'dropPendingUpdates', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly ?bool $dropPendingUpdates = null,
    ) {}
}
