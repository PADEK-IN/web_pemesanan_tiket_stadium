<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/event', function () {
    return view('pages.admin.events.list');
})->middleware(['auth', 'verified'])->name('event');

Route::get('/ticket', function () {
    return view('pages.admin.tickets.list');
})->middleware(['auth', 'verified'])->name('ticket');

Route::get('/transaction', function () {
    return view('pages.admin.transactions.list');
})->middleware(['auth', 'verified'])->name('transaction');

Route::get('/user', function () {
    return view('pages.admin.users.list');
})->middleware(['auth', 'verified'])->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
