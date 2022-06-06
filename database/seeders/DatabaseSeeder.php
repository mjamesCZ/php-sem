<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Event;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed venues
        Venue::factory(6)->create();

        // Seed artists
        Artist::factory(6)->create();

        // Seed events
        Event::factory(6)->create();
    }
}
