<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class ConvertGiftToStarsRequest extends Request
{
    protected const METHOD = 'convertGiftToStars';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'owned_gift_id' => ['property' => 'ownedGiftId', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
        public readonly string $ownedGiftId,
    ) {}
}
