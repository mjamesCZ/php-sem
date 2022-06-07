<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Deal;
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
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed venues
        $venues = Venue::factory(5)->create();

        // Seed artists
        Artist::factory(6)->create();

        // Seed events
        foreach ($venues as $venue) {
            $event = Event::factory()->create([
                'venue_id' => $venue->id
            ]);

            // Seed deals
            Deal::factory()->create([
                'event_id' => $event->id
            ]);
        }
    }
}
