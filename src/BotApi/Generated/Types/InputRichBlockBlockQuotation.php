<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichBlockBlockQuotation extends InputRichBlock
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'blocks' => ['property' => 'blocks', 'type' => 'Array of InputRichBlock', 'optional' => false],
        'credit' => ['property' => 'credit', 'type' => 'RichText', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'blockquote',
    ];

    /**
     * @param  list<InputRichBlockParagraph|InputRichBlockSectionHeading|InputRichBlockPreformatted|InputRichBlockFooter|InputRichBlockDivider|InputRichBlockMathematicalExpression|InputRichBlockAnchor|InputRichBlockList|InputRichBlockBlockQuotation|InputRichBlockPullQuotation|InputRichBlockCollage|InputRichBlockSlideshow|InputRichBlockTable|InputRichBlockDetails|InputRichBlockMap|InputRichBlockAnimation|InputRichBlockAudio|InputRichBlockPhoto|InputRichBlockVideo|InputRichBlockVoiceNote|InputRichBlockThinking>  $blocks
     */
    public function __construct(
        public readonly string $type,
        public readonly array $blocks,
        public readonly RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink|null $credit = null,
    ) {}
}
