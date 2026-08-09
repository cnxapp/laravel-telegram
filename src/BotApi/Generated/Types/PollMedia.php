<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class PollMedia extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'animation' => ['property' => 'animation', 'type' => 'Animation', 'optional' => true],
        'audio' => ['property' => 'audio', 'type' => 'Audio', 'optional' => true],
        'document' => ['property' => 'document', 'type' => 'Document', 'optional' => true],
        'link' => ['property' => 'link', 'type' => 'Link', 'optional' => true],
        'live_photo' => ['property' => 'livePhoto', 'type' => 'LivePhoto', 'optional' => true],
        'location' => ['property' => 'location', 'type' => 'Location', 'optional' => true],
        'photo' => ['property' => 'photo', 'type' => 'Array of PhotoSize', 'optional' => true],
        'sticker' => ['property' => 'sticker', 'type' => 'Sticker', 'optional' => true],
        'venue' => ['property' => 'venue', 'type' => 'Venue', 'optional' => true],
        'video' => ['property' => 'video', 'type' => 'Video', 'optional' => true],
    ];

    /**
     * @param  list<PhotoSize>|null  $photo
     */
    public function __construct(
        public readonly ?Animation $animation = null,
        public readonly ?Audio $audio = null,
        public readonly ?Document $document = null,
        public readonly ?Link $link = null,
        public readonly ?LivePhoto $livePhoto = null,
        public readonly ?Location $location = null,
        public readonly ?array $photo = null,
        public readonly ?Sticker $sticker = null,
        public readonly ?Venue $venue = null,
        public readonly ?Video $video = null,
    ) {}
}
