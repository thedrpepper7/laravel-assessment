<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomePageController; 

// Home Page
Route::get('/homepage', [HomePageController::class, 'showHomePage']);

// List of companies
Route::get('/', [CompanyController::class, 'index']);

// Employees Page (should be hidden withouth login)
Route::get('/employees', [EmployeesController::class, 'showEmployees'])
->middleware('auth')
->name('employees.list');

// Authentication page
Route::get('/authentication', [LoginController::class, 'showLoginForm'])->name('login.form');

// Post form data
Route::post('/login', [LoginController::class, 'login'])->name('login');

