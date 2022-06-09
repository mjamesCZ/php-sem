<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('artists.index', [
            'artists' => Artist::latest()->paginate(12)
        ]);
    }

    // Show single listing
    public function show(Artist $artist)
    {
        return view('artists.show', [
            'artist' => $artist
        ]);
    }

    // Show create form
    public function create()
    {
        return view('artists.create');
    }

    // Show edit form
    public function edit(Artist $artist)
    {
        return view('artists.edit', ['artist' => $artist]);
    }

    // Store created artist
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'tags' => 'required',
            'country' => 'required',
            'website' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Artist::create($formFields);

        return redirect('/artists')->with('alert', 'Artist created successfully!');
    }

    // Update artist
    public function update(Request $request, Artist $artist)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'tags' => 'required',
            'country' => 'required',
            'website' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $artist->update($formFields);

        return back()->with('alert', 'Artist updated successfully!');
    }

    // Delete artist
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect('/admin')->with('alert', 'Artist deleted successfully!');
    }
}
