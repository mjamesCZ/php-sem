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

    // Show create form
    public function create()
    {
        return view('events.create');
    }

    // Show edit form
    public function edit(Event $event)
    {
        return view('events.edit', ['event' => $event]);
    }

    // Store created event
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'time' => 'required',
            'description' => 'required',
            'venue_id' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Event::create($formFields);

        return redirect('/')->with('alert', 'Event created successfully!');
    }
}
