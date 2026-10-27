<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'noemi@gmail.com'],
            [
                'name' => 'Noemí',
                'password' => Hash::make('8264'),
            ]
        );
    }
}