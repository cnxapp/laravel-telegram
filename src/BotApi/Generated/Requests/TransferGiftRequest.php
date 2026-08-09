<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class TransferGiftRequest extends Request
{
    protected const METHOD = 'transferGift';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'owned_gift_id' => ['property' => 'ownedGiftId', 'type' => 'String', 'optional' => false],
        'new_owner_chat_id' => ['property' => 'newOwnerChatId', 'type' => 'Integer', 'optional' => false],
        'star_count' => ['property' => 'starCount', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
        public readonly string $ownedGiftId,
        public readonly int $newOwnerChatId,
        public readonly ?int $starCount = null,
    ) {}
}
