<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\ArrayableEnumTrait;

enum SusBlock7: string
{
    use ArrayableEnumTrait;

    case BUSHING_E_In = '60.8';
    case BUSHING_D_In = '61.2';
    case BUSHING_C_In = '61.6';
    case BUSHING_B_In = '62.0';
    case BUSHING_A = '62.4';
    case BUSHING_B_Out = '62.8';
    case BUSHING_C_Out = '63.2';
    case BUSHING_D_Out = '63.6';
    case BUSHING_E_Out = '64.0';
}
