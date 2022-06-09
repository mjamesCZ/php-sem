<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('venues.index', [
            'venues' => Venue::latest()->filter(request(['category']))->paginate(12)
        ]);
    }

    // Show single listing
    public function show(Venue $venue)
    {
        return view('venues.show', [
            'venue' => $venue
        ]);
    }

    // Show create form
    public function create()
    {
        return view('venues.create');
    }

    // Show edit form
    public function edit(Venue $venue)
    {
        return view('venues.edit', ['venue' => $venue]);
    }

    // Store created venue
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'address' => 'required',
            'website' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Venue::create($formFields);

        return redirect('/')->with('alert', 'Venue created successfully!');
    }

    // Update venue
    public function update(Request $request, Venue $venue)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'address' => 'required',
            'website' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $venue->update($formFields);

        return back()->with('alert', 'Venue updated successfully!');
    }

    // Delete venue
    public function destroy(Venue $venue)
    {
        $venue->delete();
        return redirect('/')->with('alert', 'Venue deleted successfully!');
    }
}
