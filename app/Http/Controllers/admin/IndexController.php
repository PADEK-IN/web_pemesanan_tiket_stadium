<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use App\Models\Event;
use App\Models\Review;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(): View
    {
        $qtyUser = User::count();
        $qtyEvent = Event::count();
        $qtyReview = Review::count();
        $qtyTransaction = Transaction::all()->sum(function ($transaction) {
            $price = $transaction->eventData->price;
            $quantity = $transaction->quantity;
            return $price*$quantity;
        });

        $qty = [
            'user' => $qtyUser,
            'event' => $qtyEvent,
            'review' => $qtyReview,
            'transaction' => $qtyTransaction,
        ];

        // Mengirim dataQty ke view
        return view('pages.admin.dashboard.index', ['qty'=>$qty]);
    }
}
