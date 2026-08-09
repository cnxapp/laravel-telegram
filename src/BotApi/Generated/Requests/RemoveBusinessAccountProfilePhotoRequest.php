<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class RemoveBusinessAccountProfilePhotoRequest extends Request
{
    protected const METHOD = 'removeBusinessAccountProfilePhoto';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'is_public' => ['property' => 'isPublic', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
        public readonly ?bool $isPublic = null,
    ) {}
}
