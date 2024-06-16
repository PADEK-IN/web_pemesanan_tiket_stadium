<?php

namespace App\Http\Controllers\user;

use App\Models\Event;
use Illuminate\View\View;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class UserTransactionController extends Controller
{
    public function getAllData(): View
    {

        $transactions = Transaction::join('events', 'events.id', '=', 'id_event')
                    ->orderByDesc('events.date')
                    ->orderByDesc('events.time')
                    ->get();

        return view('pages.user.transactions.list', ['transactions' => $transactions]);
    }

    public function createPage($id): View
    {
        $idUser = Auth::id();
        $idEvent = Hashids::decode($id);

        $event = Event::find($idEvent[0]);

        return view('pages.user.transactions.create', compact('event', 'idUser'));
    }

    public function createTransaction(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'id_event' => 'required|integer',
            'quantity' => 'required|integer',
            'proof' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Handle image upload
        if ($request->hasFile('proof')) {
            $image = $request->file('proof');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('/event', $imageName, 'public_custom');
            $imagePath = 'assets/img/event/'.$imageName;
        } else {
            $imagePath = null; // Default image if no image uploaded
        }

        try {
            $idUser = Auth::id();
            $idEvent=Hashids::decode($request->input('id_event'));

            Transaction::create([
                'id_user' => $idUser,
                'id_event' => $idEvent[0],
                'quantity' => $request->input('rating'),
                'proof' => $imagePath,
            ]);

        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error, gagal melakukan pemesanan. Harap coba lagi.')
                            ->withInput();
        }

        return redirect()->route('transaction')->with('success', 'Berhasil melakukan pemesanan. Harap tunggu validasi 1x24 jam ya.');
    }

}
