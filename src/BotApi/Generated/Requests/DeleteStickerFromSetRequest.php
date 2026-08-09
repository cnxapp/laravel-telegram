<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class DeleteStickerFromSetRequest extends Request
{
    protected const METHOD = 'deleteStickerFromSet';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'sticker' => ['property' => 'sticker', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $sticker,
    ) {}
}
