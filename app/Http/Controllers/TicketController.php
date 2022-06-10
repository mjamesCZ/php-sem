<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Show users tickets
    public function index()
    {
        return view('tickets.index', [
            'tickets' => Ticket::latest()->where('user_id', auth()->user()->id)->get(),
        ]);
    }

    // Purchase a ticket
    public function store(Request $request, Deal $deal)
    {
        $formFields = $request->validate([
            'quantity' => 'required|min:1',
        ]);

        $formFields['deal_id'] = $deal->id;
        $formFields['user_id'] = auth()->user()->id;

        $deal->update(['stock' => $deal->stock - $request->quantity]);

        Ticket::create($formFields);

        return back()->with('alert', "Ticket purchased successfully! You've paid: " . $request->quantity * $deal->price . ' Kč');
    }
}
