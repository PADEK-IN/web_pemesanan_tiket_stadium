<?php

use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\TicketController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::get('/', function () {
    return view('pages.welcome');
});

// User Routes
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

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Admin Routes
Route::prefix("admin")->middleware(["auth", "verified"])->group(function (){

    Route::get('/dashboard', [IndexController::class, 'index'])->name('admin.dashboard');

    Route::get('/event', [EventController::class, 'getAllData'])->name('admin.event');
    Route::get('/event/{id}', [EventController::class, 'show'])->name('admin.event.show');
    Route::get('/event/create', [EventController::class, 'getCreatePage'])->name('admin.event.create');
    Route::post('/event/create', [EventController::class, 'create']);

    Route::get('/ticket', [TicketController::class, 'getAllData'])->name('admin.ticket');
    Route::get('/ticket/create', [TicketController::class, 'getCreatePage'])->name('admin.ticket.create');
    Route::post('/ticket/create', [TicketController::class, 'create'])->name('admin.ticket.create');

    Route::get('/transaction', [TransactionController::class, 'getAllData'])->name('admin.transaction');

    Route::get('/review', [ReviewController::class, 'getAllData'])->name('admin.review');

    Route::get('/user', [UserController::class, 'getAllData'])->name('admin.user');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
