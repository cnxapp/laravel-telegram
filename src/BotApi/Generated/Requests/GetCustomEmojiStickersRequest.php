<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetCustomEmojiStickersRequest extends Request
{
    protected const METHOD = 'getCustomEmojiStickers';

    protected const RETURN_TYPE = 'Array of Sticker';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'custom_emoji_ids' => ['property' => 'customEmojiIds', 'type' => 'Array of String', 'optional' => false],
    ];

    /**
     * @param  list<string>  $customEmojiIds
     */
    public function __construct(
        public readonly array $customEmojiIds,
    ) {}
}
