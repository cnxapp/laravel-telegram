<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class InputRichBlockListItem extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'blocks' => ['property' => 'blocks', 'type' => 'Array of InputRichBlock', 'optional' => false],
        'has_checkbox' => ['property' => 'hasCheckbox', 'type' => 'True', 'optional' => true],
        'is_checked' => ['property' => 'isChecked', 'type' => 'True', 'optional' => true],
        'value' => ['property' => 'value', 'type' => 'Integer', 'optional' => true],
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => true],
    ];

    /**
     * @param  list<InputRichBlockParagraph|InputRichBlockSectionHeading|InputRichBlockPreformatted|InputRichBlockFooter|InputRichBlockDivider|InputRichBlockMathematicalExpression|InputRichBlockAnchor|InputRichBlockList|InputRichBlockBlockQuotation|InputRichBlockPullQuotation|InputRichBlockCollage|InputRichBlockSlideshow|InputRichBlockTable|InputRichBlockDetails|InputRichBlockMap|InputRichBlockAnimation|InputRichBlockAudio|InputRichBlockPhoto|InputRichBlockVideo|InputRichBlockVoiceNote|InputRichBlockThinking>  $blocks
     */
    public function __construct(
        public readonly array $blocks,
        public readonly ?bool $hasCheckbox = null,
        public readonly ?bool $isChecked = null,
        public readonly ?int $value = null,
        public readonly ?string $type = null,
    ) {}
}
