<?php

namespace App\Http\Controllers\user;

use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class UserEventController extends Controller
{
    public function getAllData(): View
    {
        $events = Event::orderByDesc('events.date')->orderByDesc('events.time')->get();

        return view('pages.user.events.list', ['events' => $events ]);
    }

    public function getCreatePage(): View
    {
        return view('pages.user.events.create');
    }

    public function detail($id): View
    {
        // Find the event by ID
        $event = Event::find($id);

        // Check if the event exists
        if (!$event) {
            return redirect()->route('event')->with('error', 'Event not found.');
        }

        // Return a view with the event data
        return view('pages.user.events.detail', compact('event'));
    }

    public function review($id): View
    {
        // Find the event by ID
        $event = Event::find($id);

        return view('pages.user.events.review', compact('event'));
    }

}
