<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @phpstan-ignore-next-line 
 * @mixin IdeHelperMember
 */
class Member extends Model
{
    use HasFactory;

    protected $casts = [
        'date_of_birth' => 'date',
        'insurance_date' => 'date',
        'insurance_type' => 'int',
        'grade' => 'int',
        'last_grading_date' => 'date',
        'next_grading_date' => 'date',
        'is_instructor' => 'boolean',
        'email_contact_consent' => 'boolean',
    ];
}
