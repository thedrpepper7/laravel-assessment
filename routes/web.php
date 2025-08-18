<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomePageController; 

// Home Page
Route::get('/', [HomePageController::class, 'showHomePage']);

// List of companies
Route::get('/companies', [CompanyController::class, 'index']);

// Employees Page (should be hidden withouth login)
Route::get('/employees', [EmployeesController::class, 'index'])
->middleware('auth')
->name('employees.list');

// Delete the row from database for company
Route::post('/deleteCompany', [CompanyController::class, 'deleteCompany'])->name('deleteCompany');

// Delete the row from employees 
Route::post('/deleteEmployee', [EmployeesController::class, 'deleteEmployee'])->name('deleteEmployee');

// Authentication page
Route::get('/authentication', [LoginController::class, 'showLoginForm'])->name('login');

// Insert the employee entry
Route::post('/insertEmployee', [EmployeesController::class, 'append'])->name('insertEmployee');

// Post form data for login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Post logout input 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

