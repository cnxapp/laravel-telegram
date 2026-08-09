<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class WebhookInfo extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'url' => ['property' => 'url', 'type' => 'String', 'optional' => false],
        'has_custom_certificate' => ['property' => 'hasCustomCertificate', 'type' => 'Boolean', 'optional' => false],
        'pending_update_count' => ['property' => 'pendingUpdateCount', 'type' => 'Integer', 'optional' => false],
        'ip_address' => ['property' => 'ipAddress', 'type' => 'String', 'optional' => true],
        'last_error_date' => ['property' => 'lastErrorDate', 'type' => 'Integer', 'optional' => true],
        'last_error_message' => ['property' => 'lastErrorMessage', 'type' => 'String', 'optional' => true],
        'last_synchronization_error_date' => ['property' => 'lastSynchronizationErrorDate', 'type' => 'Integer', 'optional' => true],
        'max_connections' => ['property' => 'maxConnections', 'type' => 'Integer', 'optional' => true],
        'allowed_updates' => ['property' => 'allowedUpdates', 'type' => 'Array of String', 'optional' => true],
    ];

    /**
     * @param  list<string>|null  $allowedUpdates
     */
    public function __construct(
        public readonly string $url,
        public readonly bool $hasCustomCertificate,
        public readonly int $pendingUpdateCount,
        public readonly ?string $ipAddress = null,
        public readonly ?int $lastErrorDate = null,
        public readonly ?string $lastErrorMessage = null,
        public readonly ?int $lastSynchronizationErrorDate = null,
        public readonly ?int $maxConnections = null,
        public readonly ?array $allowedUpdates = null,
    ) {}
}
