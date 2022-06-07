<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    /**
     * Get the events that take place at the venue.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
