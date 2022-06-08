<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    // Show artists listing
    public function index()
    {
        return view('artists.index', [
            'artists' => Artist::latest()->paginate(12)
        ]);
    }
}
