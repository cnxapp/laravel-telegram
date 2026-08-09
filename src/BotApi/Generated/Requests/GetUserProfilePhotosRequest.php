<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class GetUserProfilePhotosRequest extends Request
{
    protected const METHOD = 'getUserProfilePhotos';

    protected const RETURN_TYPE = 'UserProfilePhotos';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'offset' => ['property' => 'offset', 'type' => 'Integer', 'optional' => true],
        'limit' => ['property' => 'limit', 'type' => 'Integer', 'optional' => true],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly ?int $offset = null,
        public readonly ?int $limit = null,
    ) {}
}
