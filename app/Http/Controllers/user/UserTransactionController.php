<?php

namespace App\Http\Controllers\user;

use App\Models\Ticket;
use App\Models\Transaction;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

}
