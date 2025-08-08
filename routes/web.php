<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;

Route::get('/', [CompanyController::class, 'index']);

Route::get('/employees', function () {
    return view('employees');
});

Route::get('/authentication', function () {
    return view('authentication');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

