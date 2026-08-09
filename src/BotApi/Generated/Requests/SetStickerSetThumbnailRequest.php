<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetStickerSetThumbnailRequest extends Request
{
    protected const METHOD = 'setStickerSetThumbnail';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'name' => ['property' => 'name', 'type' => 'String', 'optional' => false],
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'thumbnail' => ['property' => 'thumbnail', 'type' => 'InputFile or String', 'optional' => true],
        'format' => ['property' => 'format', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $name,
        public readonly int $userId,
        public readonly string $format,
        public readonly InputFile|string|null $thumbnail = null,
    ) {}
}
