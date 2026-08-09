<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetChatPhotoRequest extends Request
{
    protected const METHOD = 'setChatPhoto';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'photo' => ['property' => 'photo', 'type' => 'InputFile', 'optional' => false],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly InputFile $photo,
    ) {}
}
