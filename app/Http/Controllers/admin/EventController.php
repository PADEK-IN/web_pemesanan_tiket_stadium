<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function getAllData(): View
    {
        return view('pages.admin.events.list', ['events' => Event::all()]);
    }

    public function getCreatePage(): View
    {
        return view('pages.admin.events.create');
    }

    public function create(Request $request): RedirectResponse
    {
        // $event = new Event;

        // $event->title = $request->input('title');
        // $event->description = $request->input('description');
        // $event->date = $request->input('date');
        // $event->time = $request->input('time');

        // $event->save();

        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i', // Adjust the time format as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Create and save the event
        try {
            Event::create($validator->validated());
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Failed to create event. Please try again.')
                            ->withInput();
        }

        // Redirect to a named route
        return redirect()->route('admin.event')->with('success', 'Event created successfully.');
    }

}
