<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class UploadStickerFileRequest extends Request
{
    protected const METHOD = 'uploadStickerFile';

    protected const RETURN_TYPE = 'File';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'sticker' => ['property' => 'sticker', 'type' => 'InputFile', 'optional' => false],
        'sticker_format' => ['property' => 'stickerFormat', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly int $userId,
        public readonly InputFile $sticker,
        public readonly string $stickerFormat,
    ) {}
}
