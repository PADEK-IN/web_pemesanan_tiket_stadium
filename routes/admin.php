<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::prefix("admin")->middleware(["auth", "verified"])->group(function (){

    Route::get('/dashboard', [IndexController::class, 'index'])->name('admin.dashboard');

    Route::get('/event', [EventController::class, 'getAllData'])->name('admin.event');
    Route::get('/event/create', [EventController::class, 'getCreatePage'])->name('admin.event.create');
    Route::get('/event/{id}', [EventController::class, 'detailPage']);
    Route::get('/event/edit/{id}', [EventController::class, 'editPage']);
    Route::post('/event/create', [EventController::class, 'create']);

    Route::get('/category', [CategoryController::class, 'getAllData'])->name('admin.category');
    Route::get('/category/create', [CategoryController::class, 'getCreatePage'])->name('admin.category.create');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');

    Route::get('/transaction', [TransactionController::class, 'getAllData'])->name('admin.transaction');
    Route::get('/transaction/check/{id}', [TransactionController::class, 'detail']);

    Route::get('/review', [ReviewController::class, 'getAllData'])->name('admin.review');

    Route::get('/user', [UserController::class, 'getAllData'])->name('admin.user');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

});
