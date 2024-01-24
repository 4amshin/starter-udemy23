<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(15)->create();

        User::create([
            'name' => 'Test Doang',
            'email' => 'superadmin@gmail.com',
            'bio' => 'i am admin',
            'phone' => '123456789',
            'role' => 'superadmin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}
