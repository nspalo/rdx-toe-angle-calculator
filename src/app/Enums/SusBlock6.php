<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\ArrayableEnumTrait;

enum SusBlock6: string
{
    use ArrayableEnumTrait;

    case BUSHING_E_In = '57.2';
    case BUSHING_D_In = '57.6';
    case BUSHING_C_In = '58.0';
    case BUSHING_B_In = '58.4';
    case BUSHING_A = '58.8';
    case BUSHING_B_Out = '59.2';
    case BUSHING_C_Out = '59.6';
    case BUSHING_D_Out = '60.0';
    case BUSHING_E_Out = '60.4';
}
