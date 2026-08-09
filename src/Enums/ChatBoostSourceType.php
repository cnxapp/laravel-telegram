<?php

namespace Cnx\LaravelTelegram\Enums;

enum ChatBoostSourceType: string
{
    case PREMIUM = 'premium';
    case GIFT_CODE = 'gift_code';
    case GIVEAWAY = 'giveaway';
}
