<?php

namespace App\Http\Controllers\admin;

use App\Models\Review;
use App\Models\User;
use Illuminate\View\View;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function getAllData(): View
    {
        return view('pages.admin.users.list', ['users' => User::all()]);
    }

    public function detailPage($id): View
    {
        // Find the event by ID
        $validId = Hashids::decode($id);
        $user = User::find($validId[0]);

        // Check if the user exists
        if (!$user) {
            return redirect()->route('admin.user')->with('error', 'Pengguna tidak ditemukan.');
        }

        // Return a view with the user data
        return view('pages.admin.users.detail', compact('user'));
    }

    public function upgrade($id): RedirectResponse
    {
        try {
            //get product by ID
            $validId = Hashids::decode($id);
            $user = User::findOrFail($validId[0]);

            $user->role = 'admin';

            $user->save();

            return redirect()->route('admin.user')->with('success', 'Berhasil upgrade status user.');
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error, maaf, gagal upgrade status user.')
                            ->withInput();
        }
    }

    public function downgrade($id): RedirectResponse
    {
        try {
            //get product by ID
            $validId = Hashids::decode($id);
            $user = User::findOrFail($validId[0]);

            $user->role = 'user';

            $user->save();

            return redirect()->route('admin.user')->with('success', 'Berhasil downgrade status user.');
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error, maaf, gagal downgrade status user.')
                            ->withInput();
        }
    }

    public function destroy($id): RedirectResponse
    {
        try {
            //get product by ID
            $validId = Hashids::decode($id);
            $user = User::findOrFail($validId[0]);

            $transaction = Transaction::where('id_user', $validId)->first();
            $review = Review::where('id_user', $validId)->first();

            if($transaction && $review){
                return redirect()->back()
                                ->with('error', 'Maaf, data user tidak dapat dihapus karena user sudah melakukan transaksi atau membuat ulasan.')
                                ->withInput();
            }

            //delete product
            $user->delete();

            //redirect to index
            return redirect()->route('admin.category')->with(['success' => 'Berhasil menghapus data user']);
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error, maaf gagal menghapus data user.'. $e->getMessage())
                            ->withInput();
        }
    }
}
