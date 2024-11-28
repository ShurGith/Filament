<?php

namespace Database\Seeders;

use App\Models\Talk;
use App\Models\User;
use App\Models\Venue;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Speaker;
use App\Models\Conference;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'JuqanJota',
            'email' => 'esnola@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        Conference::factory(200)->create();
        Speaker::factory(200)->create();
        Talk::factory(200)->create();
        Venue::factory(200)->create();
        // \App\Models\User::factory(10)->create();
        // // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
