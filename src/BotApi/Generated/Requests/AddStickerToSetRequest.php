<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InputSticker;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class AddStickerToSetRequest extends Request
{
    protected const METHOD = 'addStickerToSet';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => false],
        'sticker' => ['property' => 'sticker', 'type' => 'InputSticker', 'optional' => false],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly string $name,
        public readonly InputSticker $sticker,
    ) {}
}
