<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\ReactionTypeCustomEmoji;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReactionTypeEmoji;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ReactionTypePaid;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetMessageReactionRequest extends Request
{
    protected const METHOD = 'setMessageReaction';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => false],
        'reaction' => ['property' => 'reaction', 'type' => 'Array of ReactionType', 'optional' => true],
        'is_big' => ['property' => 'isBig', 'type' => 'Boolean', 'optional' => true],
    ];

    /**
     * @param  list<ReactionTypeEmoji|ReactionTypeCustomEmoji|ReactionTypePaid>|null  $reaction
     */
    public function __construct(
        public readonly int|string $chatId,
        public readonly int $messageId,
        public readonly ?array $reaction = null,
        public readonly ?bool $isBig = null,
    ) {}
}
