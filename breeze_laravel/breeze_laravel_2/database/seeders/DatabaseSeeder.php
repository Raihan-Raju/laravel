<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

Use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
Use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([

                'name' => fake()->name(),
                'username' => fake()->unique()->userName(),
                'number' => fake()->phoneNumber(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), //12345678
                'role' =>'admin',
                'status' => 'active',
                'remember_token' => Str::random(10),

            ]);
         User::factory(10)->create();

      
    }
}
