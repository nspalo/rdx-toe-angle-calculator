<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\ArrayableEnumTrait;

enum Difference: string
{
    use ArrayableEnumTrait;

    case DIFFERENCE_0_0 = '0.0';
    case DIFFERENCE_0_4 = '0.3';
    case DIFFERENCE_0_8 = '0.5';
    case DIFFERENCE_1_2 = '0.8';
    case DIFFERENCE_1_6 = '1.1';
    case DIFFERENCE_2_0 = '1.3';
    case DIFFERENCE_2_4 = '1.6';
    case DIFFERENCE_2_8 = '1.9';
    case DIFFERENCE_3_2 = '2.1';
    case DIFFERENCE_3_6 = '2.4';
    case DIFFERENCE_4_0 = '2.7';
    case DIFFERENCE_4_4 = '2.9';
    case DIFFERENCE_4_8 = '3.2';
}