<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputProfilePhotoAnimated extends InputProfilePhoto
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'animation' => ['property' => 'animation', 'type' => 'String', 'optional' => false],
        'main_frame_timestamp' => ['property' => 'mainFrameTimestamp', 'type' => 'Float', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'animated',
    ];

    public function __construct(
        public readonly string $type,
        public readonly string|InputFile $animation,
        public readonly ?float $mainFrameTimestamp = null,
    ) {}
}
