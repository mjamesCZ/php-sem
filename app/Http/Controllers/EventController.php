<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('events.index', [
            'events' => Event::latest()->paginate(12)
        ]);
    }
}
