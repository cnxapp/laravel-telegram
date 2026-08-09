<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class EditUserStarSubscriptionRequest extends Request
{
    protected const METHOD = 'editUserStarSubscription';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'telegram_payment_charge_id' => ['property' => 'telegramPaymentChargeId', 'type' => 'String', 'optional' => false],
        'is_canceled' => ['property' => 'isCanceled', 'type' => 'Boolean', 'optional' => false],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly string $telegramPaymentChargeId,
        public readonly bool $isCanceled,
    ) {}
}
