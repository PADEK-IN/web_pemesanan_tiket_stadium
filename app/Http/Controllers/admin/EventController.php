<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function getAllData(): View
    {
        $events = Event::orderByDesc('schedule')->get();
        return view('pages.admin.events.list', compact('events'));
    }

    public function getCreatePage(): View
    {
        $categories = Category::all(['id', 'name']);
        return view('pages.admin.events.create', compact('categories'));
    }

    public function detailPage($id): View
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
            'schedule' => 'required',
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
        } else {
            $imageName = null;
        }

        // Create and save the event
        try {
            $idCategory = Hashids::decode($request->input('id_category'));
            Event::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'id_category' => $idCategory[0],
                'image' => $imageName,
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

    public function editPage($id): View
    {
        $validId = Hashids::decode($id);
        // Find the event by ID
        $event = Event::find($validId[0]);
        $categories = Category::all(['id', 'name']);

        // Check if the event exists
        if (!$event) {
            return redirect()->route('admin.event')->with('error', 'Event not found.');
        }

        // Return a view with the event data
        return view('pages.admin.events.edit', compact('event', 'categories'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        try {
            // Validate the incoming request data
            $validator = Validator::make($request->all(), [
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // max 2MB
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
            }

            //get product by ID
            $validId = Hashids::decode($id);
            $event = Event::findOrFail($validId[0]);

            //check if image is uploaded
            if ($request->hasFile('image')) {
                $filePath = 'event/' . $event['image'];
                Storage::disk('public_custom')->delete($filePath);

                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('/event', $imageName, 'public_custom');
            } else {
                $imageName = $event->image;
            }

            $idCategory = Hashids::decode($request->input('id_category'));

            $event->name = $request->input('name');
            $event->description = $request->input('description');
            $event->id_category = $idCategory[0];
            $event->image = $imageName;
            $event->schedule = $request->input('schedule');
            $event->quota = $request->input('quota');
            $event->price = $request->input('price');

            $event->save();

            return redirect()->route('admin.event')->with('success', 'Data acara berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error, maaf, gagal memperbarui data acara.')
                            ->withInput();
        }
    }

    public function destroy($id): RedirectResponse
    {
        try {
            //get product by ID
            $validId = Hashids::decode($id);
            $event = Event::findOrFail($validId[0]);

            $transaction = Transaction::where('id_event', $validId)->first();

            if($transaction){
                return redirect()->back()
                                ->with('error', 'Maaf, data acara tidak dapat dihapus karena sudah ada transaksi.')
                                ->withInput();
            }

            //delete image
            Storage::disk('public_custom')->delete('event/' . $event['image']);

            //delete product
            $event->delete();

            //redirect to index
            return redirect()->route('admin.event')->with(['success' => 'Data Acara Berhasil Dihapus!']);
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error, maaf gagal menghapus data acara.')
                            ->withInput();
        }
    }

}
