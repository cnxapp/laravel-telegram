<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class RepostStoryRequest extends Request
{
    protected const METHOD = 'repostStory';

    protected const RETURN_TYPE = 'Story';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'from_chat_id' => ['property' => 'fromChatId', 'type' => 'Integer', 'optional' => false],
        'from_story_id' => ['property' => 'fromStoryId', 'type' => 'Integer', 'optional' => false],
        'active_period' => ['property' => 'activePeriod', 'type' => 'Integer', 'optional' => false],
        'post_to_chat_page' => ['property' => 'postToChatPage', 'type' => 'Boolean', 'optional' => true],
        'protect_content' => ['property' => 'protectContent', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly string $businessConnectionId,
        public readonly int $fromChatId,
        public readonly int $fromStoryId,
        public readonly int $activePeriod,
        public readonly ?bool $postToChatPage = null,
        public readonly ?bool $protectContent = null,
    ) {}
}
