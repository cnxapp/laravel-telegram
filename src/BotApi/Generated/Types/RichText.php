<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class RichText extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        RichTextBold::class,
        RichTextItalic::class,
        RichTextUnderline::class,
        RichTextStrikethrough::class,
        RichTextSpoiler::class,
        RichTextDateTime::class,
        RichTextTextMention::class,
        RichTextSubscript::class,
        RichTextSuperscript::class,
        RichTextMarked::class,
        RichTextCode::class,
        RichTextCustomEmoji::class,
        RichTextMathematicalExpression::class,
        RichTextUrl::class,
        RichTextEmailAddress::class,
        RichTextPhoneNumber::class,
        RichTextBankCardNumber::class,
        RichTextMention::class,
        RichTextHashtag::class,
        RichTextCashtag::class,
        RichTextBotCommand::class,
        RichTextAnchor::class,
        RichTextAnchorLink::class,
        RichTextReference::class,
        RichTextReferenceLink::class,
    ];
}
