<?php

namespace Cnx\LaravelTelegram\Enums;

enum EmojiType: string
{
    case EMOJI = 'emoji';
    case CUSTOM_EMOJI = 'custom_emoji';
    case PAID = 'paid';
}
