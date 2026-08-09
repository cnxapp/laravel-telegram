<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ShippingOption extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'title' => ['property' => 'title', 'type' => 'String', 'optional' => false],
        'prices' => ['property' => 'prices', 'type' => 'Array of LabeledPrice', 'optional' => false],
    ];

    /**
     * @param  list<LabeledPrice>  $prices
     */
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly array $prices,
    ) {}
}
