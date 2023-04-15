<?php

declare(strict_types=1);

namespace App\Enums;

enum MemberTypes: int
{
    case Adult = 1;
    case Cadet = 2;
    case Junior = 3;
}
