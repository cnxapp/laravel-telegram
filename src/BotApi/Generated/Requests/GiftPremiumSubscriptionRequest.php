<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageEntity;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GiftPremiumSubscriptionRequest extends Request
{
    protected const METHOD = 'giftPremiumSubscription';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'month_count' => ['property' => 'monthCount', 'type' => 'Integer', 'optional' => false],
        'star_count' => ['property' => 'starCount', 'type' => 'Integer', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => true],
        'text_parse_mode' => ['property' => 'textParseMode', 'type' => 'String', 'optional' => true],
        'text_entities' => ['property' => 'textEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $textEntities
     */
    public function __construct(
        public readonly int $userId,
        public readonly int $monthCount,
        public readonly int $starCount,
        public readonly ?string $text = null,
        public readonly ?string $textParseMode = null,
        public readonly ?array $textEntities = null,
    ) {}
}
