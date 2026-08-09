<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class AnswerPreCheckoutQueryRequest extends Request
{
    protected const METHOD = 'answerPreCheckoutQuery';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'pre_checkout_query_id' => ['property' => 'preCheckoutQueryId', 'type' => 'String', 'optional' => false],
        'ok' => ['property' => 'ok', 'type' => 'Boolean', 'optional' => false],
        'error_message' => ['property' => 'errorMessage', 'type' => 'String', 'optional' => true],
    ];

    public function __construct(
        public readonly string $preCheckoutQueryId,
        public readonly bool $ok,
        public readonly ?string $errorMessage = null,
    ) {}
}
