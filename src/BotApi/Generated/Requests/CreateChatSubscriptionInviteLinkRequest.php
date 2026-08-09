<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class CreateChatSubscriptionInviteLinkRequest extends Request
{
    protected const METHOD = 'createChatSubscriptionInviteLink';

    protected const RETURN_TYPE = 'ChatInviteLink';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => true],
        'subscription_period' => ['property' => 'subscriptionPeriod', 'type' => 'Integer', 'optional' => false],
        'subscription_price' => ['property' => 'subscriptionPrice', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $subscriptionPeriod,
        public readonly int $subscriptionPrice,
        public readonly ?string $name = null,
    ) {}
}
