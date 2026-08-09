<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetWebhookRequest extends Request
{
    protected const METHOD = 'setWebhook';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'url' => ['property' => 'url', 'type' => 'String', 'optional' => false],
        'certificate' => ['property' => 'certificate', 'type' => 'InputFile', 'optional' => true],
        'ip_address' => ['property' => 'ipAddress', 'type' => 'String', 'optional' => true],
        'max_connections' => ['property' => 'maxConnections', 'type' => 'Integer', 'optional' => true],
        'allowed_updates' => ['property' => 'allowedUpdates', 'type' => 'Array of String', 'optional' => true],
        'drop_pending_updates' => ['property' => 'dropPendingUpdates', 'type' => 'Boolean', 'optional' => true],
        'secret_token' => ['property' => 'secretToken', 'type' => 'String', 'optional' => true],
    ];

    /**
     * @param  list<string>|null  $allowedUpdates
     */
    public function __construct(
        public readonly string $url,
        public readonly ?InputFile $certificate = null,
        public readonly ?string $ipAddress = null,
        public readonly ?int $maxConnections = null,
        public readonly ?array $allowedUpdates = null,
        public readonly ?bool $dropPendingUpdates = null,
        public readonly ?string $secretToken = null,
    ) {}
}
