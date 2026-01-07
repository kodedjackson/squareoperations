<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Example seeder
        $user = User::create([
            'name' => 'SquareOps Admin',
            'email' => 'admin@squareoperations.com',
            'password' => bcrypt('secret'),
            'is_platform_admin' => true,
            'email_verified_at' => now(),
        ]);

        // Give a personal team (required by Jetstream)
        $team = $user->ownedTeams()->create(['name' => 'SquareOperations Platform']);
        $user->switchTeam($team);
    }
}
