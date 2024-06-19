<?php

namespace App\Http\Controllers\admin;

use App\Models\Review;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReviewController
{
    public function getAllData(): View
    {
        $reviews = Review::orderByDesc('created_at')->get();
        return view('pages.admin.reviews.list', compact('reviews'));
    }
}
