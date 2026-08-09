<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineQueryResultVenue extends InlineQueryResult
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'latitude' => ['property' => 'latitude', 'type' => 'Float', 'optional' => false],
        'longitude' => ['property' => 'longitude', 'type' => 'Float', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'address' => ['property' => 'address', 'type' => 'String', 'optional' => false],
        'foursquare_id' => ['property' => 'foursquareId', 'type' => 'String', 'optional' => true],
        'foursquare_type' => ['property' => 'foursquareType', 'type' => 'String', 'optional' => true],
        'google_place_id' => ['property' => 'googlePlaceId', 'type' => 'String', 'optional' => true],
        'google_place_type' => ['property' => 'googlePlaceType', 'type' => 'String', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
        'input_message_content' => ['property' => 'inputMessageContent', 'type' => 'InputMessageContent', 'optional' => true],
        'thumbnail_url' => ['property' => 'thumbnailUrl', 'type' => 'String', 'optional' => true],
        'thumbnail_width' => ['property' => 'thumbnailWidth', 'type' => 'Integer', 'optional' => true],
        'thumbnail_height' => ['property' => 'thumbnailHeight', 'type' => 'Integer', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'venue',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string $id,
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly string $title,
        public readonly string $address,
        public readonly ?string $foursquareId = null,
        public readonly ?string $foursquareType = null,
        public readonly ?string $googlePlaceId = null,
        public readonly ?string $googlePlaceType = null,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
        public readonly InputTextMessageContent|InputRichMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent|null $inputMessageContent = null,
        public readonly ?string $thumbnailUrl = null,
        public readonly ?int $thumbnailWidth = null,
        public readonly ?int $thumbnailHeight = null,
    ) {}
}
