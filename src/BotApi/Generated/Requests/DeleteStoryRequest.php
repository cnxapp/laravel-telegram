<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class DeleteStoryRequest extends Request
{
    protected const METHOD = 'deleteStory';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'story_id' => ['property' => 'storyId', 'type' => 'Integer', 'optional' => false],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
        public readonly int $storyId,
    ) {}
}
