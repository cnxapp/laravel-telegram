<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Update extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'update_id' => ['property' => 'updateId', 'type' => 'Integer', 'optional' => false],
        'message' => ['property' => 'message', 'type' => 'Message', 'optional' => true],
        'edited_message' => ['property' => 'editedMessage', 'type' => 'Message', 'optional' => true],
        'channel_post' => ['property' => 'channelPost', 'type' => 'Message', 'optional' => true],
        'edited_channel_post' => ['property' => 'editedChannelPost', 'type' => 'Message', 'optional' => true],
        'business_connection' => ['property' => 'businessConnection', 'type' => 'BusinessConnection', 'optional' => true],
        'business_message' => ['property' => 'businessMessage', 'type' => 'Message', 'optional' => true],
        'edited_business_message' => ['property' => 'editedBusinessMessage', 'type' => 'Message', 'optional' => true],
        'deleted_business_messages' => ['property' => 'deletedBusinessMessages', 'type' => 'BusinessMessagesDeleted', 'optional' => true],
        'guest_message' => ['property' => 'guestMessage', 'type' => 'Message', 'optional' => true],
        'message_reaction' => ['property' => 'messageReaction', 'type' => 'MessageReactionUpdated', 'optional' => true],
        'message_reaction_count' => ['property' => 'messageReactionCount', 'type' => 'MessageReactionCountUpdated', 'optional' => true],
        'inline_query' => ['property' => 'inlineQuery', 'type' => 'InlineQuery', 'optional' => true],
        'chosen_inline_result' => ['property' => 'chosenInlineResult', 'type' => 'ChosenInlineResult', 'optional' => true],
        'callback_query' => ['property' => 'callbackQuery', 'type' => 'CallbackQuery', 'optional' => true],
        'shipping_query' => ['property' => 'shippingQuery', 'type' => 'ShippingQuery', 'optional' => true],
        'pre_checkout_query' => ['property' => 'preCheckoutQuery', 'type' => 'PreCheckoutQuery', 'optional' => true],
        'purchased_paid_media' => ['property' => 'purchasedPaidMedia', 'type' => 'PaidMediaPurchased', 'optional' => true],
        'poll' => ['property' => 'poll', 'type' => 'Poll', 'optional' => true],
        'poll_answer' => ['property' => 'pollAnswer', 'type' => 'PollAnswer', 'optional' => true],
        'my_chat_member' => ['property' => 'myChatMember', 'type' => 'ChatMemberUpdated', 'optional' => true],
        'chat_member' => ['property' => 'chatMember', 'type' => 'ChatMemberUpdated', 'optional' => true],
        'chat_join_request' => ['property' => 'chatJoinRequest', 'type' => 'ChatJoinRequest', 'optional' => true],
        'chat_boost' => ['property' => 'chatBoost', 'type' => 'ChatBoostUpdated', 'optional' => true],
        'removed_chat_boost' => ['property' => 'removedChatBoost', 'type' => 'ChatBoostRemoved', 'optional' => true],
        'managed_bot' => ['property' => 'managedBot', 'type' => 'ManagedBotUpdated', 'optional' => true],
        'subscription' => ['property' => 'subscription', 'type' => 'BotSubscriptionUpdated', 'optional' => true],
    ];

    public function __construct(
        public readonly int $updateId,
        public readonly ?Message $message = null,
        public readonly ?Message $editedMessage = null,
        public readonly ?Message $channelPost = null,
        public readonly ?Message $editedChannelPost = null,
        public readonly ?BusinessConnection $businessConnection = null,
        public readonly ?Message $businessMessage = null,
        public readonly ?Message $editedBusinessMessage = null,
        public readonly ?BusinessMessagesDeleted $deletedBusinessMessages = null,
        public readonly ?Message $guestMessage = null,
        public readonly ?MessageReactionUpdated $messageReaction = null,
        public readonly ?MessageReactionCountUpdated $messageReactionCount = null,
        public readonly ?InlineQuery $inlineQuery = null,
        public readonly ?ChosenInlineResult $chosenInlineResult = null,
        public readonly ?CallbackQuery $callbackQuery = null,
        public readonly ?ShippingQuery $shippingQuery = null,
        public readonly ?PreCheckoutQuery $preCheckoutQuery = null,
        public readonly ?PaidMediaPurchased $purchasedPaidMedia = null,
        public readonly ?Poll $poll = null,
        public readonly ?PollAnswer $pollAnswer = null,
        public readonly ?ChatMemberUpdated $myChatMember = null,
        public readonly ?ChatMemberUpdated $chatMember = null,
        public readonly ?ChatJoinRequest $chatJoinRequest = null,
        public readonly ?ChatBoostUpdated $chatBoost = null,
        public readonly ?ChatBoostRemoved $removedChatBoost = null,
        public readonly ?ManagedBotUpdated $managedBot = null,
        public readonly ?BotSubscriptionUpdated $subscription = null,
    ) {}
}
