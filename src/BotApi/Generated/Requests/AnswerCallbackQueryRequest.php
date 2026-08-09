<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class AnswerCallbackQueryRequest extends Request
{
    protected const METHOD = 'answerCallbackQuery';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'callback_query_id' => ['property' => 'callbackQueryId', 'type' => 'String', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'String', 'optional' => true],
        'show_alert' => ['property' => 'showAlert', 'type' => 'Boolean', 'optional' => true],
        'url' => ['property' => 'url', 'type' => 'String', 'optional' => true],
        'cache_time' => ['property' => 'cacheTime', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly string $callbackQueryId,
        public readonly ?string $text = null,
        public readonly ?bool $showAlert = null,
        public readonly ?string $url = null,
        public readonly ?int $cacheTime = null,
    ) {}
}
