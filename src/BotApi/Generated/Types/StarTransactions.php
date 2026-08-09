<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class StarTransactions extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'transactions' => ['property' => 'transactions', 'type' => 'Array of StarTransaction', 'optional' => false],
    ];

    /**
     * @param  list<StarTransaction>  $transactions
     */
    public function __construct(
        public readonly array $transactions,
    ) {}
}
