<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function getAllData(): View
    {
        return view('pages.admin.categories.list', ['categories' => Category::all()]);
    }

    public function getCreatePage(): View
    {

        return view('pages.admin.categories.create');
    }

    public function create(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Create and save the event
        try {
            Category::create([
                'name' => $request->input('name'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Failed to create category. Please try again.')
                            ->withInput();
        }

        // Redirect to a named route
        return redirect()->route('admin.category')->with('success', 'Category created successfully.');
    }

    public function editPage($id): View
    {
        // Find the event by ID
        $validId = Hashids::decode($id);
        $category = Category::find($validId[0]);

        // Check if the category exists
        if (!$category) {
            return redirect()->route('admin.event')->with('error', 'Kategori tidak ditemukan.');
        }

        // Return a view with the event data
        return view('pages.admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        try {
            //get product by ID
            $validId = Hashids::decode($id);
            $event = Category::findOrFail($validId[0]);

            $event->name = $request->input('name');

            $event->save();

            return redirect()->route('admin.category')->with('success', 'Data kategori berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error, maaf, gagal memperbarui data kategori.')
                            ->withInput();
        }
    }

    public function destroy($id): RedirectResponse
    {
        try {
            //get product by ID
            $validId = Hashids::decode($id);
            $category = Category::findOrFail($validId[0]);

            //delete product
            $category->delete();

            //redirect to index
            return redirect()->route('admin.category')->with(['success' => 'Data Kategori Berhasil Dihapus!']);
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Server error, maaf gagal menghapus data kategori.')
                            ->withInput();
        }
    }

}
