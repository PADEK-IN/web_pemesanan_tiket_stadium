<?php

namespace App\Http\Controllers\admin;

use Illuminate\View\View;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\RedirectResponse;

class TransactionController extends Controller
{
    public function getAllData(): View
    {
        $transactions = Transaction::orderByDesc('created_at')->get();
        return view('pages.admin.transactions.list', compact('transactions'));
    }

    public function detail($id): View
    {
        $validId = Hashids::decode($id);
        // Find the event by ID
        $transaction = Transaction::find($validId[0]);

        // Check if the event exists
        if (!$transaction) {
            return redirect()->route('admin.transaction')->with('error', 'Transaksi tidak ditemukan.');
        }

        // Return a view with the event data
        return view('pages.admin.transactions.validation', compact('transaction'));
    }

    public function validation(Request $request, $id): RedirectResponse
    {
        try {
            //get product by ID
            $validId = Hashids::decode($id);
            $transaction = Transaction::findOrFail($validId[0]);

            $transaction->status = $request->input('status');
            $transaction->isValid = $request->input('isValid') === '1';

            $transaction->save();

            return redirect()->route('admin.transaction')->with('success', 'Berhasil melakukan validasi transaksi.');
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error. Maaf, gagal melakukan validasi transaksi.'. $e->getMessage())
                            ->withInput();
        }
    }

}
