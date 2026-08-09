<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetUserGiftsRequest extends Request
{
    protected const METHOD = 'getUserGifts';

    protected const RETURN_TYPE = 'OwnedGifts';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'exclude_unlimited' => ['property' => 'excludeUnlimited', 'type' => 'Boolean', 'optional' => true],
        'exclude_limited_upgradable' => ['property' => 'excludeLimitedUpgradable', 'type' => 'Boolean', 'optional' => true],
        'exclude_limited_non_upgradable' => ['property' => 'excludeLimitedNonUpgradable', 'type' => 'Boolean', 'optional' => true],
        'exclude_from_blockchain' => ['property' => 'excludeFromBlockchain', 'type' => 'Boolean', 'optional' => true],
        'exclude_unique' => ['property' => 'excludeUnique', 'type' => 'Boolean', 'optional' => true],
        'sort_by_price' => ['property' => 'sortByPrice', 'type' => 'Boolean', 'optional' => true],
        'offset' => ['property' => 'offset', 'type' => 'String', 'optional' => true],
        'limit' => ['property' => 'limit', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly ?bool $excludeUnlimited = null,
        public readonly ?bool $excludeLimitedUpgradable = null,
        public readonly ?bool $excludeLimitedNonUpgradable = null,
        public readonly ?bool $excludeFromBlockchain = null,
        public readonly ?bool $excludeUnique = null,
        public readonly ?bool $sortByPrice = null,
        public readonly ?string $offset = null,
        public readonly ?int $limit = null,
    ) {}
}
