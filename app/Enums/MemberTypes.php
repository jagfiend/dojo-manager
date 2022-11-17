<?php

declare(strict_types=1);

namespace App\Enums;

enum MemberTypes: int
{
    case ADULT = 1;
    case CADET = 2;
    case JUNIOR = 3;

    /**
     * @return array<int, string>
     */
    public static function labels(): array
    {
        return [
            1 => 'Adult',
            2 => 'Cadet',
            3 => 'Junior',
        ];
    }
}
