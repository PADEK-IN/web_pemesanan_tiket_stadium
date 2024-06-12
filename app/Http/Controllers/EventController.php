<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getAllData(): View
    {
        return view('pages.admin.events.list', ['events' => Event::all()]);
    }

}
