<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetUserEmojiStatusRequest extends Request
{
    protected const METHOD = 'setUserEmojiStatus';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'emoji_status_custom_emoji_id' => ['property' => 'emojiStatusCustomEmojiId', 'type' => 'String', 'optional' => true],
        'emoji_status_expiration_date' => ['property' => 'emojiStatusExpirationDate', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly ?string $emojiStatusCustomEmojiId = null,
        public readonly ?int $emojiStatusExpirationDate = null,
    ) {}
}
