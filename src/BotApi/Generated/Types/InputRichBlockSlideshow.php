<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichBlockSlideshow extends InputRichBlock
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'blocks' => ['property' => 'blocks', 'type' => 'Array of InputRichBlock', 'optional' => false],
        'caption' => ['property' => 'caption', 'type' => 'RichBlockCaption', 'optional' => true],
    ];

    /** @var array<string, scalar> */
    protected const FIXED_FIELDS = [
        'type' => 'slideshow',
    ];

    /**
     * @param  list<InputRichBlockParagraph|InputRichBlockSectionHeading|InputRichBlockPreformatted|InputRichBlockFooter|InputRichBlockDivider|InputRichBlockMathematicalExpression|InputRichBlockAnchor|InputRichBlockList|InputRichBlockBlockQuotation|InputRichBlockPullQuotation|InputRichBlockCollage|InputRichBlockSlideshow|InputRichBlockTable|InputRichBlockDetails|InputRichBlockMap|InputRichBlockAnimation|InputRichBlockAudio|InputRichBlockPhoto|InputRichBlockVideo|InputRichBlockVoiceNote|InputRichBlockThinking>  $blocks
     */
    public function __construct(
        public readonly string $type,
        public readonly array $blocks,
        public readonly ?RichBlockCaption $caption = null,
    ) {}
}
