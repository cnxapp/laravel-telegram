<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class DirectMessagesTopic extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'topic_id' => ['property' => 'topicId', 'type' => 'Integer', 'optional' => false],
        'user' => ['property' => 'user', 'type' => 'User', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'user' => 'present',
    ];

    public function __construct(
        public readonly int $topicId,
        public readonly ?User $user = null,
    ) {}
}
