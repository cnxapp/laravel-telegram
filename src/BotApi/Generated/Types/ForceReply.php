<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class ForceReply extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'force_reply' => ['property' => 'forceReply', 'type' => 'True', 'optional' => false],
        'input_field_placeholder' => ['property' => 'inputFieldPlaceholder', 'type' => 'String', 'optional' => true],
        'selective' => ['property' => 'selective', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly bool $forceReply,
        public readonly ?string $inputFieldPlaceholder = null,
        public readonly ?bool $selective = null,
    ) {}
}
