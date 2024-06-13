<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Transaction;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function getAllData(): View
    {
        return view('pages.admin.transactions.list', ['transactions' => Transaction::all()]);
    }
}
