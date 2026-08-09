<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class RichBlockTable extends RichBlock
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'cells' => ['property' => 'cells', 'type' => 'Array of Array of RichBlockTableCell', 'optional' => false],
        'is_bordered' => ['property' => 'isBordered', 'type' => 'True', 'optional' => true],
        'is_striped' => ['property' => 'isStriped', 'type' => 'True', 'optional' => true],
        'caption' => ['property' => 'caption', 'type' => 'RichText', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'table',
    ];

    /**
     * @param  list<list<RichBlockTableCell>>  $cells
     */
    public function __construct(
        public readonly string $type,
        public readonly array $cells,
        public readonly ?bool $isBordered = null,
        public readonly ?bool $isStriped = null,
        public readonly RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink|null $caption = null,
    ) {}
}
