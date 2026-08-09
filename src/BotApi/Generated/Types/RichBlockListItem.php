<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class RichBlockListItem extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'label' => ['property' => 'label', 'type' => 'String', 'optional' => false],
        'blocks' => ['property' => 'blocks', 'type' => 'Array of RichBlock', 'optional' => false],
        'has_checkbox' => ['property' => 'hasCheckbox', 'type' => 'True', 'optional' => true],
        'is_checked' => ['property' => 'isChecked', 'type' => 'True', 'optional' => true],
        'value' => ['property' => 'value', 'type' => 'Integer', 'optional' => true],
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => true],
    ];

    /**
     * @param  list<RichBlockParagraph|RichBlockSectionHeading|RichBlockPreformatted|RichBlockFooter|RichBlockDivider|RichBlockMathematicalExpression|RichBlockAnchor|RichBlockList|RichBlockBlockQuotation|RichBlockPullQuotation|RichBlockCollage|RichBlockSlideshow|RichBlockTable|RichBlockDetails|RichBlockMap|RichBlockAnimation|RichBlockAudio|RichBlockPhoto|RichBlockVideo|RichBlockVoiceNote|RichBlockThinking>  $blocks
     */
    public function __construct(
        public readonly string $label,
        public readonly array $blocks,
        public readonly ?bool $hasCheckbox = null,
        public readonly ?bool $isChecked = null,
        public readonly ?int $value = null,
        public readonly ?string $type = null,
    ) {}
}
