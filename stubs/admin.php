<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function() {
	Route::get('/dashboard', [AdminController::class , 'dashboard'])->name('dashboard');
	Route::get('profile', [AdminController::class , 'profile'])->name('profile');
	Route::post('general-update', [AdminController::class , 'generalupdate'])->name('general.update');
	Route::post('pass-update', [AdminController::class , 'passupdate'])->name('pass.update');
});