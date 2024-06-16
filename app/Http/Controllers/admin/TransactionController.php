<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use App\Models\Transaction;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function getAllData(): View
    {
        $transactions = Transaction::orderByDesc('created_at')->get();
        return view('pages.admin.transactions.list', compact('transactions'));
    }
}
