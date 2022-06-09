<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Event;
use App\Models\Venue;
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
        return view('events.create', [
            'venues' => Venue::all(),
            'artists' => Artist::all(),
        ]);
    }

    // Show edit form
    public function edit(Event $event)
    {
        return view('events.edit', [
            'event' => $event,
            'venues' => Venue::all(),
            'artists' => Artist::all()
        ]);
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

        $event = Event::create($formFields);

        $event->artists()->attach($request->artists);

        return redirect('/')->with('alert', 'Event created successfully!');
    }

    // Update event
    public function update(Request $request, Event $event)
    {
        $event->artists()->detach();

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

        $event->update($formFields);

        $event->artists()->attach($request->artists);

        return back()->with('alert', 'Event updated successfully!');
    }

    // Delete venue
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/')->with('alert', 'Event deleted successfully!');
    }
}
