<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllData(): View
    {
        return view('pages.admin.users.list', ['users' => User::all()]);
    }
}
