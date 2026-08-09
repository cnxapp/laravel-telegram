<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetManagedBotAccessSettingsRequest extends Request
{
    protected const METHOD = 'setManagedBotAccessSettings';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'is_access_restricted' => ['property' => 'isAccessRestricted', 'type' => 'Boolean', 'optional' => false],
        'added_user_ids' => ['property' => 'addedUserIds', 'type' => 'Array of Integer', 'optional' => true],
    ];

    /**
     * @param  list<int>|null  $addedUserIds
     */
    public function __construct(
        public readonly int $userId,
        public readonly bool $isAccessRestricted,
        public readonly ?array $addedUserIds = null,
    ) {}
}
