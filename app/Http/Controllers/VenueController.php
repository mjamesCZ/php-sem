<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    // Show venues listing
    public function index()
    {
        return view('venues.index', [
            'venues' => Venue::latest()->filter(request(['category']))->paginate(12)
        ]);
    }
}
