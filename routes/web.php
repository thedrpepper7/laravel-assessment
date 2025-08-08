<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'index']);

Route::get('/employees', function () {
    return view('employees');
});

Route::get('/authentication', function () {
    return view('authentication');
});

