<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InputProfilePhotoAnimated;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputProfilePhotoStatic;
use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class SetMyProfilePhotoRequest extends Request
{
    protected const METHOD = 'setMyProfilePhoto';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'photo' => ['property' => 'photo', 'type' => 'InputProfilePhoto', 'optional' => false],
    ];

    public function __construct(
        public readonly InputProfilePhotoStatic|InputProfilePhotoAnimated $photo,
    ) {}
}
