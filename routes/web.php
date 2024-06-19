<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::get('/', [GuestController::class, 'index'])->name('guest');
Route::get('/events', [GuestController::class, 'eventPage'])->name('guest.events');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';
