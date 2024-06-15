<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

}
