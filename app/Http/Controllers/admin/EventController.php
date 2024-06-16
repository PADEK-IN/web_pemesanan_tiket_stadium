<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Vinkla\Hashids\Facades\Hashids;

class EventController extends Controller
{
    public function getAllData(): View
    {
        $events = Event::orderByDesc('datetime')->get();
        return view('pages.admin.events.list', compact('events'));
    }

    public function getCreatePage(): View
    {
        $categories = Category::all(['id', 'name']);
        return view('pages.admin.events.create', compact('categories'));
    }

    public function show($id): View
    {
        $validId = Hashids::decode($id);
        // Find the event by ID
        $event = Event::find($validId[0]);

        // Check if the event exists
        if (!$event) {
            return redirect()->route('admin.event')->with('error', 'Event not found.');
        }

        // Return a view with the event data
        return view('pages.admin.events.detail', compact('event'));
    }

    public function create(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'description' => 'required|string',
            'id_category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
            'schedule' => 'required|date_format:Y-m-d H:i:s',
            'quota' => 'required|integer',
            'price' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('/event', $imageName, 'public_custom');
            $imagePath = 'assets/img/event/'.$imageName;
        } else {
            $imagePath = 'assets/img/blank.jpg'; // Default image if no image uploaded
        }

        // Create and save the event
        try {
            $idCategory = Hashids::decode($request->input('id_category'));
            Event::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'id_category' => $idCategory[0],
                'image' => $imagePath,
                'schedule' => $request->input('schedule'),
                'quota' => $request->input('quota'),
                'price' => $request->input('price'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Failed to create event. Please try again.')
                            ->withInput();
        }

        // Redirect to a named route
        return redirect()->route('admin.event')->with('success', 'Event created successfully.');
    }


}
