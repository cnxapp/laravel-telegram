<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InputStoryContentPhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputStoryContentVideo;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageEntity;
use Cnx\LaravelTelegram\BotApi\Generated\Types\StoryArea;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class PostStoryRequest extends Request
{
    protected const METHOD = 'postStory';

    protected const RETURN_TYPE = 'Story';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'business_connection_id' => ['property' => 'businessConnectionId', 'type' => 'String', 'optional' => false],
        'content' => ['property' => 'content', 'type' => 'InputStoryContent', 'optional' => false],
        'active_period' => ['property' => 'activePeriod', 'type' => 'Integer', 'optional' => false],
        'caption' => ['property' => 'caption', 'type' => 'String', 'optional' => true],
        'parse_mode' => ['property' => 'parseMode', 'type' => 'String', 'optional' => true],
        'caption_entities' => ['property' => 'captionEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'areas' => ['property' => 'areas', 'type' => 'Array of StoryArea', 'optional' => true],
        'post_to_chat_page' => ['property' => 'postToChatPage', 'type' => 'Boolean', 'optional' => true],
        'protect_content' => ['property' => 'protectContent', 'type' => 'Boolean', 'optional' => true],
    ];

    /**
     * @param  list<MessageEntity>|null  $captionEntities
     * @param  list<StoryArea>|null  $areas
     */
    public function __construct(
        public readonly string $businessConnectionId,
        public readonly InputStoryContentPhoto|InputStoryContentVideo $content,
        public readonly int $activePeriod,
        public readonly ?string $caption = null,
        public readonly ?string $parseMode = null,
        public readonly ?array $captionEntities = null,
        public readonly ?array $areas = null,
        public readonly ?bool $postToChatPage = null,
        public readonly ?bool $protectContent = null,
    ) {}
}
