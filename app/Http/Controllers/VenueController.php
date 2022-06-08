<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    // Show venue listings
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
}
