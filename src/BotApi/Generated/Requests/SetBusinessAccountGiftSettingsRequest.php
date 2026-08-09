<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\AcceptedGiftTypes;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetBusinessAccountGiftSettingsRequest extends Request
{
    protected const METHOD = 'setBusinessAccountGiftSettings';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'show_gift_button' => ['property' => 'showGiftButton', 'type' => 'Boolean', 'optional' => false],
        'accepted_gift_types' => ['property' => 'acceptedGiftTypes', 'type' => 'AcceptedGiftTypes', 'optional' => false],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
        public readonly bool $showGiftButton,
        public readonly AcceptedGiftTypes $acceptedGiftTypes,
    ) {}
}
