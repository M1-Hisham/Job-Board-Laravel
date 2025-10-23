<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('password123'),
        ]);

        User::factory()->create([
            'name' => 'Editor User',
            'email' => 'editor@editor.com',
            'role' => 'editor',
            'password' => Hash::make('password123'),
        ]);

        User::factory()->create([
            'name' => 'Editor User 22',
            'email' => 'editor22@editor.com',
            'role' => 'editor',
            'password' => Hash::make('password123'),
        ]);
    }
}
