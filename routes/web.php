<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;

Route::get('/', function () {
    return view('welcome');
});

// Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('admin_login');
});