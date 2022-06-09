<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * The events this artist is performing at.
     */
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
