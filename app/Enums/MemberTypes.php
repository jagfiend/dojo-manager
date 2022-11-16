<?php

declare(strict_types=1);

namespace App\Enums;

enum MemberTypes: int
{
    case ADULT = 1;
    case CADET = 2;
    case JUNIOR = 3;
    case PARENT = 4;
    case PARENT_STUDENT = 5;

    public static function labels(): array
    {
        return [
            1 => 'Adult',
            2 => 'Cadet',
            3 => 'Junior',
            4 => 'Parent',
            5 => 'Parent Student',
        ];
    }
}
