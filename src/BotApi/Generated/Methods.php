<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated;

use Cnx\LaravelTelegram\BotApi\Generated\Types\BotAccessSettings;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotCommand;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotDescription;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotName;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BotShortDescription;
use Cnx\LaravelTelegram\BotApi\Generated\Types\BusinessConnection;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatAdministratorRights;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatFullInfo;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatInviteLink;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatMemberAdministrator;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatMemberBanned;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatMemberLeft;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatMemberMember;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatMemberOwner;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ChatMemberRestricted;
use Cnx\LaravelTelegram\BotApi\Generated\Types\File;
use Cnx\LaravelTelegram\BotApi\Generated\Types\ForumTopic;
use Cnx\LaravelTelegram\BotApi\Generated\Types\GameHighScore;
use Cnx\LaravelTelegram\BotApi\Generated\Types\Gifts;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MenuButtonCommands;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MenuButtonDefault;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MenuButtonWebApp;
use Cnx\LaravelTelegram\BotApi\Generated\Types\Message;
use Cnx\LaravelTelegram\BotApi\Generated\Types\MessageId;
use Cnx\LaravelTelegram\BotApi\Generated\Types\OwnedGifts;
use Cnx\LaravelTelegram\BotApi\Generated\Types\Poll;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PreparedInlineMessage;
use Cnx\LaravelTelegram\BotApi\Generated\Types\PreparedKeyboardButton;
use Cnx\LaravelTelegram\BotApi\Generated\Types\SentGuestMessage;
use Cnx\LaravelTelegram\BotApi\Generated\Types\SentWebAppMessage;
use Cnx\LaravelTelegram\BotApi\Generated\Types\StarAmount;
use Cnx\LaravelTelegram\BotApi\Generated\Types\StarTransactions;
use Cnx\LaravelTelegram\BotApi\Generated\Types\Sticker;
use Cnx\LaravelTelegram\BotApi\Generated\Types\StickerSet;
use Cnx\LaravelTelegram\BotApi\Generated\Types\Story;
use Cnx\LaravelTelegram\BotApi\Generated\Types\Update;
use Cnx\LaravelTelegram\BotApi\Generated\Types\User;
use Cnx\LaravelTelegram\BotApi\Generated\Types\UserChatBoosts;
use Cnx\LaravelTelegram\BotApi\Generated\Types\UserProfileAudios;
use Cnx\LaravelTelegram\BotApi\Generated\Types\UserProfilePhotos;
use Cnx\LaravelTelegram\BotApi\Generated\Types\WebhookInfo;

/** @generated from Telegram Bot API 10.2 */
trait Methods
{
    public function addStickerToSet(Requests\AddStickerToSetRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function answerCallbackQuery(Requests\AnswerCallbackQueryRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function answerChatJoinRequestQuery(Requests\AnswerChatJoinRequestQueryRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function answerGuestQuery(Requests\AnswerGuestQueryRequest $request): SentGuestMessage
    {
        $result = $this->execute($request);
        /** @var SentGuestMessage $result */

        return $result;
    }

    public function answerInlineQuery(Requests\AnswerInlineQueryRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function answerPreCheckoutQuery(Requests\AnswerPreCheckoutQueryRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function answerShippingQuery(Requests\AnswerShippingQueryRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function answerWebAppQuery(Requests\AnswerWebAppQueryRequest $request): SentWebAppMessage
    {
        $result = $this->execute($request);
        /** @var SentWebAppMessage $result */

        return $result;
    }

    public function approveChatJoinRequest(Requests\ApproveChatJoinRequestRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function approveSuggestedPost(Requests\ApproveSuggestedPostRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function banChatMember(Requests\BanChatMemberRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function banChatSenderChat(Requests\BanChatSenderChatRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function close(): bool
    {
        $result = $this->execute(new Requests\CloseRequest);
        /** @var bool $result */

        return $result;
    }

    public function closeForumTopic(Requests\CloseForumTopicRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function closeGeneralForumTopic(Requests\CloseGeneralForumTopicRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function convertGiftToStars(Requests\ConvertGiftToStarsRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function copyMessage(Requests\CopyMessageRequest $request): MessageId
    {
        $result = $this->execute($request);
        /** @var MessageId $result */

        return $result;
    }

    /** @return list<MessageId> */
    public function copyMessages(Requests\CopyMessagesRequest $request): array
    {
        $result = $this->execute($request);
        /** @var list<MessageId> $result */

        return $result;
    }

    public function createChatInviteLink(Requests\CreateChatInviteLinkRequest $request): ChatInviteLink
    {
        $result = $this->execute($request);
        /** @var ChatInviteLink $result */

        return $result;
    }

    public function createChatSubscriptionInviteLink(Requests\CreateChatSubscriptionInviteLinkRequest $request): ChatInviteLink
    {
        $result = $this->execute($request);
        /** @var ChatInviteLink $result */

        return $result;
    }

    public function createForumTopic(Requests\CreateForumTopicRequest $request): ForumTopic
    {
        $result = $this->execute($request);
        /** @var ForumTopic $result */

        return $result;
    }

    public function createInvoiceLink(Requests\CreateInvoiceLinkRequest $request): string
    {
        $result = $this->execute($request);
        /** @var string $result */

        return $result;
    }

    public function createNewStickerSet(Requests\CreateNewStickerSetRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function declineChatJoinRequest(Requests\DeclineChatJoinRequestRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function declineSuggestedPost(Requests\DeclineSuggestedPostRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteAllMessageReactions(Requests\DeleteAllMessageReactionsRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteBusinessMessages(Requests\DeleteBusinessMessagesRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteChatPhoto(Requests\DeleteChatPhotoRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteChatStickerSet(Requests\DeleteChatStickerSetRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteEphemeralMessage(Requests\DeleteEphemeralMessageRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteForumTopic(Requests\DeleteForumTopicRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteMessage(Requests\DeleteMessageRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteMessageReaction(Requests\DeleteMessageReactionRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteMessages(Requests\DeleteMessagesRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteMyCommands(?Requests\DeleteMyCommandsRequest $request = null): bool
    {
        $result = $this->execute($request ?? new Requests\DeleteMyCommandsRequest);
        /** @var bool $result */

        return $result;
    }

    public function deleteStickerFromSet(Requests\DeleteStickerFromSetRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteStickerSet(Requests\DeleteStickerSetRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteStory(Requests\DeleteStoryRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function deleteWebhook(?Requests\DeleteWebhookRequest $request = null): bool
    {
        $result = $this->execute($request ?? new Requests\DeleteWebhookRequest);
        /** @var bool $result */

        return $result;
    }

    public function editChatInviteLink(Requests\EditChatInviteLinkRequest $request): ChatInviteLink
    {
        $result = $this->execute($request);
        /** @var ChatInviteLink $result */

        return $result;
    }

    public function editChatSubscriptionInviteLink(Requests\EditChatSubscriptionInviteLinkRequest $request): ChatInviteLink
    {
        $result = $this->execute($request);
        /** @var ChatInviteLink $result */

        return $result;
    }

    public function editEphemeralMessageCaption(Requests\EditEphemeralMessageCaptionRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function editEphemeralMessageMedia(Requests\EditEphemeralMessageMediaRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function editEphemeralMessageReplyMarkup(Requests\EditEphemeralMessageReplyMarkupRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function editEphemeralMessageText(Requests\EditEphemeralMessageTextRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function editForumTopic(Requests\EditForumTopicRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function editGeneralForumTopic(Requests\EditGeneralForumTopicRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function editMessageCaption(?Requests\EditMessageCaptionRequest $request = null): Message|bool
    {
        $result = $this->execute($request ?? new Requests\EditMessageCaptionRequest);
        /** @var Message|bool $result */

        return $result;
    }

    public function editMessageChecklist(Requests\EditMessageChecklistRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function editMessageLiveLocation(Requests\EditMessageLiveLocationRequest $request): Message|bool
    {
        $result = $this->execute($request);
        /** @var Message|bool $result */

        return $result;
    }

    public function editMessageMedia(Requests\EditMessageMediaRequest $request): Message|bool
    {
        $result = $this->execute($request);
        /** @var Message|bool $result */

        return $result;
    }

    public function editMessageReplyMarkup(?Requests\EditMessageReplyMarkupRequest $request = null): Message|bool
    {
        $result = $this->execute($request ?? new Requests\EditMessageReplyMarkupRequest);
        /** @var Message|bool $result */

        return $result;
    }

    public function editMessageText(?Requests\EditMessageTextRequest $request = null): Message|bool
    {
        $result = $this->execute($request ?? new Requests\EditMessageTextRequest);
        /** @var Message|bool $result */

        return $result;
    }

    public function editStory(Requests\EditStoryRequest $request): Story
    {
        $result = $this->execute($request);
        /** @var Story $result */

        return $result;
    }

    public function editUserStarSubscription(Requests\EditUserStarSubscriptionRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function exportChatInviteLink(Requests\ExportChatInviteLinkRequest $request): string
    {
        $result = $this->execute($request);
        /** @var string $result */

        return $result;
    }

    public function forwardMessage(Requests\ForwardMessageRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    /** @return list<MessageId> */
    public function forwardMessages(Requests\ForwardMessagesRequest $request): array
    {
        $result = $this->execute($request);
        /** @var list<MessageId> $result */

        return $result;
    }

    public function getAvailableGifts(): Gifts
    {
        $result = $this->execute(new Requests\GetAvailableGiftsRequest);
        /** @var Gifts $result */

        return $result;
    }

    public function getBusinessAccountGifts(Requests\GetBusinessAccountGiftsRequest $request): OwnedGifts
    {
        $result = $this->execute($request);
        /** @var OwnedGifts $result */

        return $result;
    }

    public function getBusinessAccountStarBalance(Requests\GetBusinessAccountStarBalanceRequest $request): StarAmount
    {
        $result = $this->execute($request);
        /** @var StarAmount $result */

        return $result;
    }

    public function getBusinessConnection(Requests\GetBusinessConnectionRequest $request): BusinessConnection
    {
        $result = $this->execute($request);
        /** @var BusinessConnection $result */

        return $result;
    }

    public function getChat(Requests\GetChatRequest $request): ChatFullInfo
    {
        $result = $this->execute($request);
        /** @var ChatFullInfo $result */

        return $result;
    }

    /** @return list<ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned> */
    public function getChatAdministrators(Requests\GetChatAdministratorsRequest $request): array
    {
        $result = $this->execute($request);
        /** @var list<ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned> $result */

        return $result;
    }

    public function getChatGifts(Requests\GetChatGiftsRequest $request): OwnedGifts
    {
        $result = $this->execute($request);
        /** @var OwnedGifts $result */

        return $result;
    }

    public function getChatMember(Requests\GetChatMemberRequest $request): ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned
    {
        $result = $this->execute($request);
        /** @var ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned $result */

        return $result;
    }

    public function getChatMemberCount(Requests\GetChatMemberCountRequest $request): int
    {
        $result = $this->execute($request);
        /** @var int $result */

        return $result;
    }

    public function getChatMenuButton(?Requests\GetChatMenuButtonRequest $request = null): MenuButtonCommands|MenuButtonWebApp|MenuButtonDefault
    {
        $result = $this->execute($request ?? new Requests\GetChatMenuButtonRequest);
        /** @var MenuButtonCommands|MenuButtonWebApp|MenuButtonDefault $result */

        return $result;
    }

    /** @return list<Sticker> */
    public function getCustomEmojiStickers(Requests\GetCustomEmojiStickersRequest $request): array
    {
        $result = $this->execute($request);
        /** @var list<Sticker> $result */

        return $result;
    }

    public function getFile(Requests\GetFileRequest $request): File
    {
        $result = $this->execute($request);
        /** @var File $result */

        return $result;
    }

    /** @return list<Sticker> */
    public function getForumTopicIconStickers(): array
    {
        $result = $this->execute(new Requests\GetForumTopicIconStickersRequest);
        /** @var list<Sticker> $result */

        return $result;
    }

    /** @return list<GameHighScore> */
    public function getGameHighScores(Requests\GetGameHighScoresRequest $request): array
    {
        $result = $this->execute($request);
        /** @var list<GameHighScore> $result */

        return $result;
    }

    public function getManagedBotAccessSettings(Requests\GetManagedBotAccessSettingsRequest $request): BotAccessSettings
    {
        $result = $this->execute($request);
        /** @var BotAccessSettings $result */

        return $result;
    }

    public function getManagedBotToken(Requests\GetManagedBotTokenRequest $request): string
    {
        $result = $this->execute($request);
        /** @var string $result */

        return $result;
    }

    public function getMe(): User
    {
        $result = $this->execute(new Requests\GetMeRequest);
        /** @var User $result */

        return $result;
    }

    /** @return list<BotCommand> */
    public function getMyCommands(?Requests\GetMyCommandsRequest $request = null): array
    {
        $result = $this->execute($request ?? new Requests\GetMyCommandsRequest);
        /** @var list<BotCommand> $result */

        return $result;
    }

    public function getMyDefaultAdministratorRights(?Requests\GetMyDefaultAdministratorRightsRequest $request = null): ChatAdministratorRights
    {
        $result = $this->execute($request ?? new Requests\GetMyDefaultAdministratorRightsRequest);
        /** @var ChatAdministratorRights $result */

        return $result;
    }

    public function getMyDescription(?Requests\GetMyDescriptionRequest $request = null): BotDescription
    {
        $result = $this->execute($request ?? new Requests\GetMyDescriptionRequest);
        /** @var BotDescription $result */

        return $result;
    }

    public function getMyName(?Requests\GetMyNameRequest $request = null): BotName
    {
        $result = $this->execute($request ?? new Requests\GetMyNameRequest);
        /** @var BotName $result */

        return $result;
    }

    public function getMyShortDescription(?Requests\GetMyShortDescriptionRequest $request = null): BotShortDescription
    {
        $result = $this->execute($request ?? new Requests\GetMyShortDescriptionRequest);
        /** @var BotShortDescription $result */

        return $result;
    }

    public function getMyStarBalance(): StarAmount
    {
        $result = $this->execute(new Requests\GetMyStarBalanceRequest);
        /** @var StarAmount $result */

        return $result;
    }

    public function getStarTransactions(?Requests\GetStarTransactionsRequest $request = null): StarTransactions
    {
        $result = $this->execute($request ?? new Requests\GetStarTransactionsRequest);
        /** @var StarTransactions $result */

        return $result;
    }

    public function getStickerSet(Requests\GetStickerSetRequest $request): StickerSet
    {
        $result = $this->execute($request);
        /** @var StickerSet $result */

        return $result;
    }

    /** @return list<Update> */
    public function getUpdates(?Requests\GetUpdatesRequest $request = null): array
    {
        $result = $this->execute($request ?? new Requests\GetUpdatesRequest);
        /** @var list<Update> $result */

        return $result;
    }

    public function getUserChatBoosts(Requests\GetUserChatBoostsRequest $request): UserChatBoosts
    {
        $result = $this->execute($request);
        /** @var UserChatBoosts $result */

        return $result;
    }

    public function getUserGifts(Requests\GetUserGiftsRequest $request): OwnedGifts
    {
        $result = $this->execute($request);
        /** @var OwnedGifts $result */

        return $result;
    }

    /** @return list<Message> */
    public function getUserPersonalChatMessages(Requests\GetUserPersonalChatMessagesRequest $request): array
    {
        $result = $this->execute($request);
        /** @var list<Message> $result */

        return $result;
    }

    public function getUserProfileAudios(Requests\GetUserProfileAudiosRequest $request): UserProfileAudios
    {
        $result = $this->execute($request);
        /** @var UserProfileAudios $result */

        return $result;
    }

    public function getUserProfilePhotos(Requests\GetUserProfilePhotosRequest $request): UserProfilePhotos
    {
        $result = $this->execute($request);
        /** @var UserProfilePhotos $result */

        return $result;
    }

    public function getWebhookInfo(): WebhookInfo
    {
        $result = $this->execute(new Requests\GetWebhookInfoRequest);
        /** @var WebhookInfo $result */

        return $result;
    }

    public function giftPremiumSubscription(Requests\GiftPremiumSubscriptionRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function hideGeneralForumTopic(Requests\HideGeneralForumTopicRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function leaveChat(Requests\LeaveChatRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function logOut(): bool
    {
        $result = $this->execute(new Requests\LogOutRequest);
        /** @var bool $result */

        return $result;
    }

    public function pinChatMessage(Requests\PinChatMessageRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function postStory(Requests\PostStoryRequest $request): Story
    {
        $result = $this->execute($request);
        /** @var Story $result */

        return $result;
    }

    public function promoteChatMember(Requests\PromoteChatMemberRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function readBusinessMessage(Requests\ReadBusinessMessageRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function refundStarPayment(Requests\RefundStarPaymentRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function removeBusinessAccountProfilePhoto(Requests\RemoveBusinessAccountProfilePhotoRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function removeChatVerification(Requests\RemoveChatVerificationRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function removeMyProfilePhoto(): bool
    {
        $result = $this->execute(new Requests\RemoveMyProfilePhotoRequest);
        /** @var bool $result */

        return $result;
    }

    public function removeUserVerification(Requests\RemoveUserVerificationRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function reopenForumTopic(Requests\ReopenForumTopicRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function reopenGeneralForumTopic(Requests\ReopenGeneralForumTopicRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function replaceManagedBotToken(Requests\ReplaceManagedBotTokenRequest $request): string
    {
        $result = $this->execute($request);
        /** @var string $result */

        return $result;
    }

    public function replaceStickerInSet(Requests\ReplaceStickerInSetRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function repostStory(Requests\RepostStoryRequest $request): Story
    {
        $result = $this->execute($request);
        /** @var Story $result */

        return $result;
    }

    public function restrictChatMember(Requests\RestrictChatMemberRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function revokeChatInviteLink(Requests\RevokeChatInviteLinkRequest $request): ChatInviteLink
    {
        $result = $this->execute($request);
        /** @var ChatInviteLink $result */

        return $result;
    }

    public function savePreparedInlineMessage(Requests\SavePreparedInlineMessageRequest $request): PreparedInlineMessage
    {
        $result = $this->execute($request);
        /** @var PreparedInlineMessage $result */

        return $result;
    }

    public function savePreparedKeyboardButton(Requests\SavePreparedKeyboardButtonRequest $request): PreparedKeyboardButton
    {
        $result = $this->execute($request);
        /** @var PreparedKeyboardButton $result */

        return $result;
    }

    public function sendAnimation(Requests\SendAnimationRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendAudio(Requests\SendAudioRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendChatAction(Requests\SendChatActionRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function sendChatJoinRequestWebApp(Requests\SendChatJoinRequestWebAppRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function sendChecklist(Requests\SendChecklistRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendContact(Requests\SendContactRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendDice(Requests\SendDiceRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendDocument(Requests\SendDocumentRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendGame(Requests\SendGameRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendGift(Requests\SendGiftRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function sendInvoice(Requests\SendInvoiceRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendLivePhoto(Requests\SendLivePhotoRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendLocation(Requests\SendLocationRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    /** @return list<Message> */
    public function sendMediaGroup(Requests\SendMediaGroupRequest $request): array
    {
        $result = $this->execute($request);
        /** @var list<Message> $result */

        return $result;
    }

    public function sendMessage(Requests\SendMessageRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendMessageDraft(Requests\SendMessageDraftRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function sendPaidMedia(Requests\SendPaidMediaRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendPhoto(Requests\SendPhotoRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendPoll(Requests\SendPollRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendRichMessage(Requests\SendRichMessageRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendRichMessageDraft(Requests\SendRichMessageDraftRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function sendSticker(Requests\SendStickerRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendVenue(Requests\SendVenueRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendVideo(Requests\SendVideoRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendVideoNote(Requests\SendVideoNoteRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function sendVoice(Requests\SendVoiceRequest $request): Message
    {
        $result = $this->execute($request);
        /** @var Message $result */

        return $result;
    }

    public function setBusinessAccountBio(Requests\SetBusinessAccountBioRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setBusinessAccountGiftSettings(Requests\SetBusinessAccountGiftSettingsRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setBusinessAccountName(Requests\SetBusinessAccountNameRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setBusinessAccountProfilePhoto(Requests\SetBusinessAccountProfilePhotoRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setBusinessAccountUsername(Requests\SetBusinessAccountUsernameRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setChatAdministratorCustomTitle(Requests\SetChatAdministratorCustomTitleRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setChatDescription(Requests\SetChatDescriptionRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setChatMemberTag(Requests\SetChatMemberTagRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setChatMenuButton(?Requests\SetChatMenuButtonRequest $request = null): bool
    {
        $result = $this->execute($request ?? new Requests\SetChatMenuButtonRequest);
        /** @var bool $result */

        return $result;
    }

    public function setChatPermissions(Requests\SetChatPermissionsRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setChatPhoto(Requests\SetChatPhotoRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setChatStickerSet(Requests\SetChatStickerSetRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setChatTitle(Requests\SetChatTitleRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setCustomEmojiStickerSetThumbnail(Requests\SetCustomEmojiStickerSetThumbnailRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setGameScore(Requests\SetGameScoreRequest $request): Message|bool
    {
        $result = $this->execute($request);
        /** @var Message|bool $result */

        return $result;
    }

    public function setManagedBotAccessSettings(Requests\SetManagedBotAccessSettingsRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setMessageReaction(Requests\SetMessageReactionRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setMyCommands(Requests\SetMyCommandsRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setMyDefaultAdministratorRights(?Requests\SetMyDefaultAdministratorRightsRequest $request = null): bool
    {
        $result = $this->execute($request ?? new Requests\SetMyDefaultAdministratorRightsRequest);
        /** @var bool $result */

        return $result;
    }

    public function setMyDescription(?Requests\SetMyDescriptionRequest $request = null): bool
    {
        $result = $this->execute($request ?? new Requests\SetMyDescriptionRequest);
        /** @var bool $result */

        return $result;
    }

    public function setMyName(?Requests\SetMyNameRequest $request = null): bool
    {
        $result = $this->execute($request ?? new Requests\SetMyNameRequest);
        /** @var bool $result */

        return $result;
    }

    public function setMyProfilePhoto(Requests\SetMyProfilePhotoRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setMyShortDescription(?Requests\SetMyShortDescriptionRequest $request = null): bool
    {
        $result = $this->execute($request ?? new Requests\SetMyShortDescriptionRequest);
        /** @var bool $result */

        return $result;
    }

    public function setPassportDataErrors(Requests\SetPassportDataErrorsRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setStickerEmojiList(Requests\SetStickerEmojiListRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setStickerKeywords(Requests\SetStickerKeywordsRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setStickerMaskPosition(Requests\SetStickerMaskPositionRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setStickerPositionInSet(Requests\SetStickerPositionInSetRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setStickerSetThumbnail(Requests\SetStickerSetThumbnailRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setStickerSetTitle(Requests\SetStickerSetTitleRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setUserEmojiStatus(Requests\SetUserEmojiStatusRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function setWebhook(Requests\SetWebhookRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function stopMessageLiveLocation(?Requests\StopMessageLiveLocationRequest $request = null): Message|bool
    {
        $result = $this->execute($request ?? new Requests\StopMessageLiveLocationRequest);
        /** @var Message|bool $result */

        return $result;
    }

    public function stopPoll(Requests\StopPollRequest $request): Poll
    {
        $result = $this->execute($request);
        /** @var Poll $result */

        return $result;
    }

    public function transferBusinessAccountStars(Requests\TransferBusinessAccountStarsRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function transferGift(Requests\TransferGiftRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function unbanChatMember(Requests\UnbanChatMemberRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function unbanChatSenderChat(Requests\UnbanChatSenderChatRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function unhideGeneralForumTopic(Requests\UnhideGeneralForumTopicRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function unpinAllChatMessages(Requests\UnpinAllChatMessagesRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function unpinAllForumTopicMessages(Requests\UnpinAllForumTopicMessagesRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function unpinAllGeneralForumTopicMessages(Requests\UnpinAllGeneralForumTopicMessagesRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function unpinChatMessage(Requests\UnpinChatMessageRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function upgradeGift(Requests\UpgradeGiftRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function uploadStickerFile(Requests\UploadStickerFileRequest $request): File
    {
        $result = $this->execute($request);
        /** @var File $result */

        return $result;
    }

    public function verifyChat(Requests\VerifyChatRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }

    public function verifyUser(Requests\VerifyUserRequest $request): bool
    {
        $result = $this->execute($request);
        /** @var bool $result */

        return $result;
    }
}
