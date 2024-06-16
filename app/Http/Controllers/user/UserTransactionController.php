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



}
