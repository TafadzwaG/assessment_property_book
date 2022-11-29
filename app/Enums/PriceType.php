<?php

namespace App\Enums;


enum PriceType: string {
    case STARTER = 'Starter';
    case EXCLUSIVE = 'Exclusive';
    case PREMIUM = 'Premium';
}