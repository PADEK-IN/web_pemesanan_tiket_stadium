<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use App\Models\Ticket;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function getAllData(): View
    {
        return view('pages.admin.tickets.list', ['tickets' => Ticket::all()]);
    }
}
