<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Requests;

use Cnx\LaravelTelegram\BotApi\Request;

/** @generated from Telegram Bot API 10.2 */
final class BanChatMemberRequest extends Request
{
    protected const METHOD = 'banChatMember';

    protected const RETURN_TYPE = 'Boolean';

    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'chat_id' => ['property' => 'chatId', 'type' => 'Integer or String', 'optional' => false],
        'user_id' => ['property' => 'userId', 'type' => 'Integer', 'optional' => false],
        'until_date' => ['property' => 'untilDate', 'type' => 'Integer', 'optional' => true],
        'revoke_messages' => ['property' => 'revokeMessages', 'type' => 'Boolean', 'optional' => true],
    ];

    public function __construct(
        public readonly int|string $chatId,
        public readonly int $userId,
        public readonly ?int $untilDate = null,
        public readonly ?bool $revokeMessages = null,
    ) {}
}
