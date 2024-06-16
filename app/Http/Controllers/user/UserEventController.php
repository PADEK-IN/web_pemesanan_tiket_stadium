<?php

namespace App\Http\Controllers\user;

use App\Models\Event;
use App\Models\Review;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Vinkla\Hashids\Facades\Hashids;

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
        $validId = Hashids::decode($id);

        $event = Event::find($validId[0]);

        // Check if the event exists
        if (!$event) {
            return redirect()->route('event')->with('error', 'Acara tidak ditemukan.');
        }

        // Return a view with the event data
        return view('pages.user.events.detail', compact('event'));
    }

    public function reviewPage($id): View
    {
        $idUser=1;
        $idEvent = Hashids::decode($id);

        $review = Review::where('id_user', $idUser)
                        ->where('id_event', $idEvent)
                        ->first();

        $event = Event::find($idEvent[0]);

        return view('pages.user.events.review', compact('event', 'review'));
    }

    public function createReview(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'rating' => 'required|integer',
            'comment' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        try {
            $idUser=1;
            $idEvent=Hashids::decode($request->input('id_event'));

            $existingReview = Review::where('id_user', $idUser)
                                    ->where('id_event', $idEvent)
                                    ->first();

            if ($existingReview) {
                return redirect()->back()
                                ->with('error', 'Maaf kamu sudah memberikan ulasan pada acara ini.')
                                ->withInput();
            }

            Review::create([
                'id_user' => $idUser,
                'id_event' => $idEvent[0],
                'rating' => $request->input('rating'),
                'comment' => $request->input('comment'),
            ]);

        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error, gagal menambahkan ulasan. Harap coba lagi.')
                            ->withInput();
        }

        return redirect()->route('transaction')->with('success', 'Berhasil memberikan ulasan.');
    }

    public function buyTicket():RedirectResponse
    {
        return redirect()->route('event')->with('success', 'Berhasil membeli tiket.');
    }

}
