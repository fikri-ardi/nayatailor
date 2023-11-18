<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fikri',
            'role_id' => UserRole::Admin,
            'email' => 'fan10062003@gmail.com',
            'password' => 'password',
            'email_verified_at' => now(),
        ]);
    }
}