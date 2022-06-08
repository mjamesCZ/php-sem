<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Show events listing
    public function index()
    {
        return view('events.index', [
            'events' => Event::latest()->filter(request(['category']))->paginate(12)
        ]);
    }
}
