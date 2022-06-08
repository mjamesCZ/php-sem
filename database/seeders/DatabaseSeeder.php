<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Deal;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
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
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed venues
        $venues = Venue::factory(14)->create();

        // Seed artists
        Artist::factory(8)->create();

        // Seed events
        foreach ($venues as $venue) {
            $event = Event::factory()->create([
                'venue_id' => $venue->id
            ]);

            // Seed deals
            $deal = Deal::factory()->create([
                'event_id' => $event->id
            ]);

            // Seed tickets
            DB::table('tickets')->insert([
                'deal_id' => $deal->id,
                'user_id' => $user->id,
            ]);
        }
    }
}
