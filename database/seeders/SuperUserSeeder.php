<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;
use RuntimeException;

final class SuperUserSeeder extends Seeder
{
    public function run(): void
    {
        if (!config('super_user.email') || !config('super_user.password')) {
            throw new RuntimeException('Super user .env vars need to be set');
        }

        if (User::query()->where('email', config('super_user.email'))->first() instanceof User) {
            throw new RuntimeException('Super user account already exists');
        }

        User::create([
            'email' => config('super_user.email'),
            'password' => Hash::make(strval(config('super_user.password'))),
        ]);
    }
}
