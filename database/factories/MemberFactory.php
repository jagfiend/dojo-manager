<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Member;
use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Member>
 */
class MemberFactory extends Factory
{
    protected $model = Member::class;

    public function definition(): array
    {
        return [
            // todo
        ];
    }
}
