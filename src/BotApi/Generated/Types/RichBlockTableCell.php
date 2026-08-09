<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class RichBlockTableCell extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'text' => ['property' => 'text', 'type' => 'RichText', 'optional' => true],
        'is_header' => ['property' => 'isHeader', 'type' => 'True', 'optional' => true],
        'colspan' => ['property' => 'colspan', 'type' => 'Integer', 'optional' => true],
        'rowspan' => ['property' => 'rowspan', 'type' => 'Integer', 'optional' => true],
        'align' => ['property' => 'align', 'type' => 'String', 'optional' => false],
        'valign' => ['property' => 'valign', 'type' => 'String', 'optional' => false],
    ];

    public function __construct(
        public readonly string $align,
        public readonly string $valign,
        public readonly RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink|null $text = null,
        public readonly ?bool $isHeader = null,
        public readonly ?int $colspan = null,
        public readonly ?int $rowspan = null,
    ) {}
}
