<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * Get the deal that this ticket is for.
     */
    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }


    /**
     * Get the user who this ticket belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
