<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\ArrayableEnumTrait;

enum SusBlock: string
{
    use ArrayableEnumTrait;

     case SUS_BLOCK_6 = '6';
     case SUS_BLOCK_7 = '7';
     case SUS_BLOCK_8 = '8';
     case SUS_BLOCK_9 = '9';

     public function getLengthPerSusBlock(): array
     {
         return match($this) {
             self::SUS_BLOCK_6 => SusBlock6::toArray(),
             self::SUS_BLOCK_7 => SusBlock7::toArray(),
             self::SUS_BLOCK_8 => SusBlock8::toArray(),
             self::SUS_BLOCK_9 => SusBlock9::toArray(),
         };
     }

    public function getLength(string $attribute): string
    {
        return $this->getLengthPerSusBlock()[$attribute];
    }
}
