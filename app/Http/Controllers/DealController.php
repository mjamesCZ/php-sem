<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\Event;
use Illuminate\Http\Request;

class DealController extends Controller
{
    // Store a created deal
    public function store(Request $request, Event $event)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'stock' => 'required|min:1',
            'price' => 'required',
        ]);

        $formFields['event_id'] = $event->id;

        Deal::create($formFields);

        return back()->with('alert', 'Deal created successfully!');
    }
}
