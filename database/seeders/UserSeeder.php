<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        //create admin
        $user = User::create([
            'name' => 'Iam Admin',
            'password' => Hash::make('12345678'),
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'created_at' => now()
        ]);
    }
}
