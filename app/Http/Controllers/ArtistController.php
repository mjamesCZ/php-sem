<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    // Show artist listings
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
}
