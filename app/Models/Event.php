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
    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    /**
     * Get the deals that this event has.
     */
    public function deals()
    {
        return $this->hasMany(Deal::class);
    }

    /**
     * The artists performing at this event.
     */
    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    /**
     * Filter events by category.
     */
    public function scopeFilter($query, array $filters)
    {
        if ($filters['category'] ?? false) {
            $query->where('category', 'like', '%' . request('category') . '%');
        }
    }
}
