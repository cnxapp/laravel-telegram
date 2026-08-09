<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetMyDefaultAdministratorRightsRequest extends Request
{
    protected const METHOD = 'getMyDefaultAdministratorRights';

    protected const RETURN_TYPE = 'ChatAdministratorRights';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'for_channels' => ['property' => 'forChannels', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly ?bool $forChannels = null,
    ) {}
}
