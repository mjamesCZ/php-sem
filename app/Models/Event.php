<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * Get the venue that the event takes place at.
     */
    public function post()
    {
        return $this->belongsTo(Venue::class);
    }
}
