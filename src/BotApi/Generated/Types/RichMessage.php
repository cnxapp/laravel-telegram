<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class RichMessage extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'blocks' => ['property' => 'blocks', 'type' => 'Array of RichBlock', 'optional' => false],
        'is_rtl' => ['property' => 'isRtl', 'type' => 'Boolean', 'optional' => true],
    ];

    /**
     * @param  list<RichBlockParagraph|RichBlockSectionHeading|RichBlockPreformatted|RichBlockFooter|RichBlockDivider|RichBlockMathematicalExpression|RichBlockAnchor|RichBlockList|RichBlockBlockQuotation|RichBlockPullQuotation|RichBlockCollage|RichBlockSlideshow|RichBlockTable|RichBlockDetails|RichBlockMap|RichBlockAnimation|RichBlockAudio|RichBlockPhoto|RichBlockVideo|RichBlockVoiceNote|RichBlockThinking>  $blocks
     */
    public function __construct(
        public readonly array $blocks,
        public readonly ?bool $isRtl = null,
    ) {}
}
