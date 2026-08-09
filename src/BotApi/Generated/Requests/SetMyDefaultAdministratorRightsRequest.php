<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatAdministratorRights;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetMyDefaultAdministratorRightsRequest extends Request
{
    protected const METHOD = 'setMyDefaultAdministratorRights';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'rights' => ['property' => 'rights', 'type' => 'ChatAdministratorRights', 'optional' => true],
        'for_channels' => ['property' => 'forChannels', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly ?ChatAdministratorRights $rights = null,
        public readonly ?bool $forChannels = null,
    ) {}
}
