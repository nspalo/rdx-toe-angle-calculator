<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\ArrayableEnumTrait;

enum Bushing: string
{
    use ArrayableEnumTrait;

    case BUSHING_E_In  = 'Ei';
    case BUSHING_D_In  = 'Di';
    case BUSHING_C_In  = 'Ci';
    case BUSHING_B_In  = 'Bi';
    case BUSHING_A     = 'A';
    case BUSHING_B_Out = 'Bo';
    case BUSHING_C_Out = 'Co';
    case BUSHING_D_Out = 'Do';
    case BUSHING_E_Out = 'Eo';

    public function getLabel(): string
    {
        return str_replace(['BUSHING_', '_'], ['', ' '], $this->name);
    }
}
