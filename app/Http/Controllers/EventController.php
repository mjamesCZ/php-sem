<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Show event listings
    public function index()
    {
        return view('events.index', [
            'events' => Event::latest()->filter(request(['category']))->paginate(12)
        ]);
    }

    // Show single listing
    public function show(Event $event)
    {
        return view('events.show', [
            'event' => $event
        ]);
    }
}
