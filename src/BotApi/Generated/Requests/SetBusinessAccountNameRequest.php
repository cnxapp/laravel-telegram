<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetBusinessAccountNameRequest extends Request
{
    protected const METHOD = 'setBusinessAccountName';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'first_name' => ['property' => 'firstName', 'type' => 'String', 'optional' => false],
        'last_name' => ['property' => 'lastName', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
        public readonly string $firstName,
        public readonly ?string $lastName = null,
    ) {}
}
