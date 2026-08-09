<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageEntity;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SendGiftRequest extends Request
{
    protected const METHOD = 'sendGift';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => true],
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => true],
        'gift_id' => ['property' => 'giftId', 'type' => 'String', 'optional' => false],
        'pay_for_upgrade' => ['property' => 'payForUpgrade', 'type' => 'Boolean', 'optional' => true],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => true],
        'text_parse_mode' => ['property' => 'textParseMode', 'type' => 'String', 'optional' => true],
        'text_entities' => ['property' => 'textEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $textEntities
     */
    public function __construct(
        public readonly string $giftId,
        public readonly ?int $userId = null,
        public readonly int|string|null $chatId = null,
        public readonly ?bool $payForUpgrade = null,
        public readonly ?string $text = null,
        public readonly ?string $textParseMode = null,
        public readonly ?array $textEntities = null,
    ) {}
}
