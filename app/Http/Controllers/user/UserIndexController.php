<?php

namespace App\Http\Controllers\user;

use Illuminate\Routing\Controller;
use App\Models\Event;
use App\Models\Review;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserIndexController extends Controller
{
    public function index(): View
    {
        $idUser = Auth::id();
        $qtyEvent = Transaction::where('id_user', $idUser)->count();
        $qtyReview = Review::where('id_user', $idUser)->count();
        $qtyTransaction = Transaction::all()->where('id_user', $idUser)->sum(function ($transaction) {
            $price = $transaction->eventData->price;
            $quantity = $transaction->quantity;
            return $price*$quantity;
        });

        $qty = [
            'event' => $qtyEvent,
            'review' => $qtyReview,
            'transaction' => $qtyTransaction,
        ];

        // Mengirim dataQty ke view
        return view('pages.user.dashboard.index', ['qty' => $qty]);
    }
}
