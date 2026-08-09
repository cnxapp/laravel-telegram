<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class RichBlockCollage extends RichBlock
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'blocks' => ['property' => 'blocks', 'type' => 'Array of RichBlock', 'optional' => false],
        'caption' => ['property' => 'caption', 'type' => 'RichBlockCaption', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'collage',
    ];

    /**
     * @param  list<RichBlockParagraph|RichBlockSectionHeading|RichBlockPreformatted|RichBlockFooter|RichBlockDivider|RichBlockMathematicalExpression|RichBlockAnchor|RichBlockList|RichBlockBlockQuotation|RichBlockPullQuotation|RichBlockCollage|RichBlockSlideshow|RichBlockTable|RichBlockDetails|RichBlockMap|RichBlockAnimation|RichBlockAudio|RichBlockPhoto|RichBlockVideo|RichBlockVoiceNote|RichBlockThinking>  $blocks
     */
    public function __construct(
        public readonly string $type,
        public readonly array $blocks,
        public readonly ?RichBlockCaption $caption = null,
    ) {}
}
