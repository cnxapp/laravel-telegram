<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PollAnswer extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'poll_id' => ['property' => 'pollId', 'type' => 'String', 'optional' => false],
        'voter_chat' => ['property' => 'voterChat', 'type' => 'Chat', 'optional' => true],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => true],
        'option_ids' => ['property' => 'optionIds', 'type' => 'Array of Integer', 'optional' => false],
        'option_persistent_ids' => ['property' => 'optionPersistentIds', 'type' => 'Array of String', 'optional' => false],
    ];

    /**
     * @param  list<int>  $optionIds
     * @param  list<string>  $optionPersistentIds
     */
    public function __construct(
        public readonly string $pollId,
        public readonly array $optionIds,
        public readonly array $optionPersistentIds,
        public readonly ?Chat $voterChat = null,
        public readonly ?User $user = null,
    ) {}
}
