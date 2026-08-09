<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
abstract class RichBlock extends Type
{
    /** @var list<class-string<Type>> */
    protected const VARIANTS = [
        RichBlockParagraph::class,
        RichBlockSectionHeading::class,
        RichBlockPreformatted::class,
        RichBlockFooter::class,
        RichBlockDivider::class,
        RichBlockMathematicalExpression::class,
        RichBlockAnchor::class,
        RichBlockList::class,
        RichBlockBlockQuotation::class,
        RichBlockPullQuotation::class,
        RichBlockCollage::class,
        RichBlockSlideshow::class,
        RichBlockTable::class,
        RichBlockDetails::class,
        RichBlockMap::class,
        RichBlockAnimation::class,
        RichBlockAudio::class,
        RichBlockPhoto::class,
        RichBlockVideo::class,
        RichBlockVoiceNote::class,
        RichBlockThinking::class,
    ];
}
