<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\ShippingOption;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class AnswerShippingQueryRequest extends Request
{
    protected const METHOD = 'answerShippingQuery';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'shipping_query_id' => ['property' => 'shippingQueryId', 'type' => 'String', 'optional' => false],
        'ok' => ['property' => 'ok', 'type' => 'Boolean', 'optional' => false],
        'shipping_options' => ['property' => 'shippingOptions', 'type' => 'Array of ShippingOption', 'optional' => true],
        'error_message' => ['property' => 'errorMessage', 'type' => 'String', 'optional' => true],
    ];

    /**
     * @param  list<ShippingOption>|null  $shippingOptions
     */
    public function __construct(
        public readonly string $shippingQueryId,
        public readonly bool $ok,
        public readonly ?array $shippingOptions = null,
        public readonly ?string $errorMessage = null,
    ) {}
}
