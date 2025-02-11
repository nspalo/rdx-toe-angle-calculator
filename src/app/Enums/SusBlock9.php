<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\ArrayableEnumTrait;

enum SusBlock9: string
{
    use ArrayableEnumTrait;

    case BUSHING_E_In = '68.0';
    case BUSHING_D_In = '68.4';
    case BUSHING_C_In = '68.8';
    case BUSHING_B_In = '69.2';
    case BUSHING_A = '69.6';
    case BUSHING_B_Out = '70.0';
    case BUSHING_C_Out = '70.4';
    case BUSHING_D_Out = '70.8';
    case BUSHING_E_Out = '71.2';
}
