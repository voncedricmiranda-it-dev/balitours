<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create admin account
        User::factory()->create([
            'email' => 'admin@example.com',
            'role' => 'admin',
            'status' => 'active',
        ]);

        // Create regular user account
        User::factory()->create([
            'email' => 'user@example.com',
            'role' => 'user',
            'status' => 'active',
        ]);
    }
}
