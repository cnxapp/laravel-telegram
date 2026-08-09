<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichMessage extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'blocks' => ['property' => 'blocks', 'type' => 'Array of InputRichBlock', 'optional' => true],
        'html' => ['property' => 'html', 'type' => 'String', 'optional' => true],
        'markdown' => ['property' => 'markdown', 'type' => 'String', 'optional' => true],
        'media' => ['property' => 'media', 'type' => 'Array of InputRichMessageMedia', 'optional' => true],
        'is_rtl' => ['property' => 'isRtl', 'type' => 'Boolean', 'optional' => true],
        'skip_entity_detection' => ['property' => 'skipEntityDetection', 'type' => 'Boolean', 'optional' => true],
    ];

    /**
     * @param  list<InputRichBlockParagraph|InputRichBlockSectionHeading|InputRichBlockPreformatted|InputRichBlockFooter|InputRichBlockDivider|InputRichBlockMathematicalExpression|InputRichBlockAnchor|InputRichBlockList|InputRichBlockBlockQuotation|InputRichBlockPullQuotation|InputRichBlockCollage|InputRichBlockSlideshow|InputRichBlockTable|InputRichBlockDetails|InputRichBlockMap|InputRichBlockAnimation|InputRichBlockAudio|InputRichBlockPhoto|InputRichBlockVideo|InputRichBlockVoiceNote|InputRichBlockThinking>|null  $blocks
     * @param  list<InputRichMessageMedia>|null  $media
     */
    public function __construct(
        public readonly ?array $blocks = null,
        public readonly ?string $html = null,
        public readonly ?string $markdown = null,
        public readonly ?array $media = null,
        public readonly ?bool $isRtl = null,
        public readonly ?bool $skipEntityDetection = null,
    ) {}
}
