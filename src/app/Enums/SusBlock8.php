<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\ArrayableEnumTrait;

enum SusBlock8: string
{
    use ArrayableEnumTrait;

    case BUSHING_E_In = '64.4';
    case BUSHING_D_In = '64.8';
    case BUSHING_C_In = '65.2';
    case BUSHING_B_In = '65.6';
    case BUSHING_A = '66.0';
    case BUSHING_B_Out = '66.4';
    case BUSHING_C_Out = '66.8';
    case BUSHING_D_Out = '67.2';
    case BUSHING_E_Out = '67.6';
}
