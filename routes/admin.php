<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\UserController;
use App\Http\Middleware\isValidAdmin;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::prefix("admin")->middleware(["auth", "verified", isValidAdmin::class])->group(function (){

    Route::get('/dashboard', [IndexController::class, 'index'])->name('admin.dashboard');

    Route::get('/event', [EventController::class, 'getAllData'])->name('admin.event');
    Route::get('/event/create', [EventController::class, 'getCreatePage'])->name('admin.event.create');
    Route::get('/event/{id}', [EventController::class, 'detailPage']);
    Route::get('/event/edit/{id}', [EventController::class, 'editPage']);
    Route::get('/event/destroy/{id}', [EventController::class, 'destroy'])->name('admin.event.destroy');
    Route::post('/event/update/{id}', [EventController::class, 'update']);
    Route::post('/event/create', [EventController::class, 'create']);

    Route::get('/category', [CategoryController::class, 'getAllData'])->name('admin.category');
    Route::get('/category/create', [CategoryController::class, 'getCreatePage'])->name('admin.category.create');
    Route::get('/category/edit/{id}', [CategoryController::class, 'editPage'])->name('admin.category.edit');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');

    Route::get('/transaction', [TransactionController::class, 'getAllData'])->name('admin.transaction');
    Route::get('/transaction/check/{id}', [TransactionController::class, 'detail'])->name('admin.transaction.check');
    Route::post('/transaction/validation/{id}', [TransactionController::class, 'validation'])->name('admin.transaction.validation');

    Route::get('/review', [ReviewController::class, 'getAllData'])->name('admin.review');

    Route::get('/user', [UserController::class, 'getAllData'])->name('admin.user');
    Route::get('/user/{id}', [UserController::class, 'detailPage'])->name('admin.user.detail');
    Route::get('/user/upgrade/{id}', [UserController::class, 'upgrade'])->name('admin.user.upgrade');
    Route::get('/user/downgrade/{id}', [UserController::class, 'downgrade'])->name('admin.user.downgrade');
    Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

});
