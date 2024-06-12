<?php

namespace App\Http\Controllers;

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
