<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ExternalReplyInfo extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'origin' => ['property' => 'origin', 'type' => 'MessageOrigin', 'optional' => false],
        'chat' => ['property' => 'chat', 'type' => 'Chat', 'optional' => true],
        'message_id' => ['property' => 'messageId', 'type' => 'Integer', 'optional' => true],
        'link_preview_options' => ['property' => 'linkPreviewOptions', 'type' => 'LinkPreviewOptions', 'optional' => true],
        'animation' => ['property' => 'animation', 'type' => 'Animation', 'optional' => true],
        'audio' => ['property' => 'audio', 'type' => 'Audio', 'optional' => true],
        'document' => ['property' => 'document', 'type' => 'Document', 'optional' => true],
        'live_photo' => ['property' => 'livePhoto', 'type' => 'LivePhoto', 'optional' => true],
        'paid_media' => ['property' => 'paidMedia', 'type' => 'PaidMediaInfo', 'optional' => true],
        'photo' => ['property' => 'photo', 'type' => 'Array of PhotoSize', 'optional' => true],
        'sticker' => ['property' => 'sticker', 'type' => 'Sticker', 'optional' => true],
        'story' => ['property' => 'story', 'type' => 'Story', 'optional' => true],
        'video' => ['property' => 'video', 'type' => 'Video', 'optional' => true],
        'video_note' => ['property' => 'videoNote', 'type' => 'VideoNote', 'optional' => true],
        'voice' => ['property' => 'voice', 'type' => 'Voice', 'optional' => true],
        'has_media_spoiler' => ['property' => 'hasMediaSpoiler', 'type' => 'True', 'optional' => true],
        'checklist' => ['property' => 'checklist', 'type' => 'Checklist', 'optional' => true],
        'contact' => ['property' => 'contact', 'type' => 'Contact', 'optional' => true],
        'dice' => ['property' => 'dice', 'type' => 'Dice', 'optional' => true],
        'game' => ['property' => 'game', 'type' => 'Game', 'optional' => true],
        'giveaway' => ['property' => 'giveaway', 'type' => 'Giveaway', 'optional' => true],
        'giveaway_winners' => ['property' => 'giveawayWinners', 'type' => 'GiveawayWinners', 'optional' => true],
        'invoice' => ['property' => 'invoice', 'type' => 'Invoice', 'optional' => true],
        'location' => ['property' => 'location', 'type' => 'Location', 'optional' => true],
        'poll' => ['property' => 'poll', 'type' => 'Poll', 'optional' => true],
        'venue' => ['property' => 'venue', 'type' => 'Venue', 'optional' => true],
    ];

    /**
     * @param  list<PhotoSize>|null  $photo
     */
    public function __construct(
        public readonly MessageOriginUser|MessageOriginHiddenUser|MessageOriginChat|MessageOriginChannel $origin,
        public readonly ?Chat $chat = null,
        public readonly ?int $messageId = null,
        public readonly ?LinkPreviewOptions $linkPreviewOptions = null,
        public readonly ?Animation $animation = null,
        public readonly ?Audio $audio = null,
        public readonly ?Document $document = null,
        public readonly ?LivePhoto $livePhoto = null,
        public readonly ?PaidMediaInfo $paidMedia = null,
        public readonly ?array $photo = null,
        public readonly ?Sticker $sticker = null,
        public readonly ?Story $story = null,
        public readonly ?Video $video = null,
        public readonly ?VideoNote $videoNote = null,
        public readonly ?Voice $voice = null,
        public readonly ?bool $hasMediaSpoiler = null,
        public readonly ?Checklist $checklist = null,
        public readonly ?Contact $contact = null,
        public readonly ?Dice $dice = null,
        public readonly ?Game $game = null,
        public readonly ?Giveaway $giveaway = null,
        public readonly ?GiveawayWinners $giveawayWinners = null,
        public readonly ?Invoice $invoice = null,
        public readonly ?Location $location = null,
        public readonly ?Poll $poll = null,
        public readonly ?Venue $venue = null,
    ) {}
}
