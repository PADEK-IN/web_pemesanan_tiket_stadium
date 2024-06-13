<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
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
