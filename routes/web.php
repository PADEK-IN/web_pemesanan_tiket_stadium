<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\user\UserEventController;
use App\Http\Controllers\user\UserIndexController;
use App\Http\Controllers\user\UserProfileController;
use App\Http\Controllers\user\UserTransactionController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::get('/', function () {
    return view('pages.welcome');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';
