<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(["auth", "verified"])->group(function (){

    Route::get('/dashboard', function () {
        return view('pages.user.dashboard.index');
    })->name('dashboard');

    Route::get('/event', function () {
        return view('pages.user.events.list');
    })->name('event');

    Route::get('/ticket', function () {
        return view('pages.user.tickets.list');
    })->name('ticket');

});

Route::prefix("admin")->middleware(["auth", "verified"])->group(function (){

    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard.index');
    })->name('admin.dashboard');

    Route::get('/event', function () {
        return view('pages.admin.events.list', ['events'=>Event::all()]);
    })->name('admin.event');

    Route::get('/ticket', function () {
        return view('pages.admin.tickets.list');
    })->name('admin.ticket');

    Route::get('/transaction', function () {
        return view('pages.admin.transactions.list');
    })->name('admin.transaction');

    Route::get('/user', [UserController::class, 'getAllData'])->name('admin.user');

});

require __DIR__.'/auth.php';
