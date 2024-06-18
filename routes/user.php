<?php

use App\Http\Controllers\user\UserEventController;
use App\Http\Controllers\user\UserIndexController;
use App\Http\Controllers\user\UserProfileController;
use App\Http\Controllers\user\UserTransactionController;
use App\Http\Middleware\isValidUser;
use Illuminate\Support\Facades\Route;

// User Routes
Route::middleware(["auth", "verified", isValidUser::class])->group(function (){

    Route::get('/dashboard', [UserIndexController::class, 'index'])->name('dashboard');

    Route::get('/event', [UserEventController::class, 'getAllData'])->name('event');
    Route::get('/event/{id}', [UserEventController::class, 'detail'])->name('event.detail');
    Route::get('/event/review/{id}', [UserEventController::class, 'reviewPage'])->name('event.review');
    Route::post('/event/review', [UserEventController::class, 'createReview'])->name('event.review.store');

    Route::get('/transaction', [UserTransactionController::class, 'getAllData'])->name('transaction');
    Route::get('/transaction/create/{id}', [UserTransactionController::class, 'createPage'])->name('transaction.create');
    Route::post('/transaction/create/', [UserTransactionController::class, 'createTransaction'])->name('transaction.create.store');

    Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [UserProfileController::class, 'destroy'])->name('profile.destroy');

});
