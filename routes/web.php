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

// User Routes
Route::middleware(["auth", "verified"])->group(function (){

    Route::get('/dashboard', [UserIndexController::class, 'index'])->name('dashboard');

    Route::get('/event', [UserEventController::class, 'getAllData'])->name('event');
    Route::get('/event/{id}', [UserEventController::class, 'detail'])->name('event.detail');
    Route::get('/event/review/{id}', [UserEventController::class, 'reviewPage'])->name('event.review');
    Route::post('/event/review', [UserEventController::class, 'createReview'])->name('event.review.store');
    Route::post('/event/ticket', [UserEventController::class, 'buyTicket'])->name('event.ticket');

    Route::get('/transaction', [UserTransactionController::class, 'getAllData'])->name('transaction');

    Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [UserProfileController::class, 'destroy'])->name('profile.destroy');

});

// Admin Routes
Route::prefix("admin")->middleware(["auth", "verified"])->group(function (){

    Route::get('/dashboard', [IndexController::class, 'index'])->name('admin.dashboard');

    Route::get('/event', [EventController::class, 'getAllData'])->name('admin.event');
    Route::get('/event/create', [EventController::class, 'getCreatePage'])->name('admin.event.create');
    Route::get('/event/{id}', [EventController::class, 'show'])->name('admin.event.show');
    Route::post('/event/create', [EventController::class, 'create']);

    Route::get('/category', [CategoryController::class, 'getAllData'])->name('admin.category');
    Route::get('/category/create', [CategoryController::class, 'getCreatePage'])->name('admin.category.create');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');

    Route::get('/transaction', [TransactionController::class, 'getAllData'])->name('admin.transaction');

    Route::get('/review', [ReviewController::class, 'getAllData'])->name('admin.review');

    Route::get('/user', [UserController::class, 'getAllData'])->name('admin.user');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

});

require __DIR__.'/auth.php';
