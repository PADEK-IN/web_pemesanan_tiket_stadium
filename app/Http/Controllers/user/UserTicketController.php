<?php

namespace App\Http\Controllers\user;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class UserTicketController extends Controller
{
    public function getAllData(): View
    {
        return view('pages.user.tickets.list', ['tickets' => Ticket::all()]);
    }

    public function getCreatePage(): View
    {

        return view('pages.user.tickets.create', ['events' => Event::all()]);
    }

    public function create(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'id_event' => 'required|string',
            'ticket_type' => 'required|string',
            'price' => 'required|integer',
            'quota' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Create and save the event
        try {
            Ticket::create([
                'id_event' => intval($request->input('id_event')),
                'ticket_type' => $request->input('ticket_type'),
                'price' => $request->input('price'),
                'quota' => $request->input('quota'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Failed to create ticket. Please try again.')
                            ->withInput();
        }

        // Redirect to a named route
        return redirect()->route('admin.ticket')->with('success', 'Ticket created successfully.');
    }

}
