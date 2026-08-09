<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class InputRichBlock extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        InputRichBlockParagraph::class,
        InputRichBlockSectionHeading::class,
        InputRichBlockPreformatted::class,
        InputRichBlockFooter::class,
        InputRichBlockDivider::class,
        InputRichBlockMathematicalExpression::class,
        InputRichBlockAnchor::class,
        InputRichBlockList::class,
        InputRichBlockBlockQuotation::class,
        InputRichBlockPullQuotation::class,
        InputRichBlockCollage::class,
        InputRichBlockSlideshow::class,
        InputRichBlockTable::class,
        InputRichBlockDetails::class,
        InputRichBlockMap::class,
        InputRichBlockAnimation::class,
        InputRichBlockAudio::class,
        InputRichBlockPhoto::class,
        InputRichBlockVideo::class,
        InputRichBlockVoiceNote::class,
        InputRichBlockThinking::class,
    ];
}
