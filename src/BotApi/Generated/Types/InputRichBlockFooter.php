<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichBlockFooter extends InputRichBlock
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'text' => ['property' => 'text', 'type' => 'RichText', 'optional' => false],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'footer',
    ];

    public function __construct(
        public readonly string $type,
        public readonly RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink $text,
    ) {}
}
