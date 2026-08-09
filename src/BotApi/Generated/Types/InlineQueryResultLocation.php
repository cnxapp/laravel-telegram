<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InlineQueryResultLocation extends InlineQueryResult
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'latitude' => ['property' => 'latitude', 'type' => 'Float', 'optional' => false],
        'longitude' => ['property' => 'longitude', 'type' => 'Float', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'horizontal_accuracy' => ['property' => 'horizontalAccuracy', 'type' => 'Float', 'optional' => true],
        'live_period' => ['property' => 'livePeriod', 'type' => 'Integer', 'optional' => true],
        'heading' => ['property' => 'heading', 'type' => 'Integer', 'optional' => true],
        'proximity_alert_radius' => ['property' => 'proximityAlertRadius', 'type' => 'Integer', 'optional' => true],
        'reply_markup' => ['property' => 'replyMarkup', 'type' => 'InlineKeyboardMarkup', 'optional' => true],
        'input_message_content' => ['property' => 'inputMessageContent', 'type' => 'InputMessageContent', 'optional' => true],
        'thumbnail_url' => ['property' => 'thumbnailUrl', 'type' => 'String', 'optional' => true],
        'thumbnail_width' => ['property' => 'thumbnailWidth', 'type' => 'Integer', 'optional' => true],
        'thumbnail_height' => ['property' => 'thumbnailHeight', 'type' => 'Integer', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'location',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string $id,
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly string $title,
        public readonly ?float $horizontalAccuracy = null,
        public readonly ?int $livePeriod = null,
        public readonly ?int $heading = null,
        public readonly ?int $proximityAlertRadius = null,
        public readonly ?InlineKeyboardMarkup $replyMarkup = null,
        public readonly InputTextMessageContent|InputRichMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent|null $inputMessageContent = null,
        public readonly ?string $thumbnailUrl = null,
        public readonly ?int $thumbnailWidth = null,
        public readonly ?int $thumbnailHeight = null,
    ) {}
}
