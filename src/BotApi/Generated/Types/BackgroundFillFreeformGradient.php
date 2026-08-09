<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class BackgroundFillFreeformGradient extends BackgroundFill
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'colors' => ['property' => 'colors', 'type' => 'Array of Integer', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'freeform_gradient',
    ];

    /**
     * @param  list<int>  $colors
     */
    public function __construct(
        public readonly string $type,
        public readonly array $colors,
    ) {}
}
