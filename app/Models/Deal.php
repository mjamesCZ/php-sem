<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the event that the deal belogs to.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Get the tickets for this deal.
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
