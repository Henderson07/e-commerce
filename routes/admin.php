<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::view('/login', 'backend.pages.admin.auth.login')->name('login');
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::view('/home', 'backend.pages.admin.home')->name('home');
    });
});
