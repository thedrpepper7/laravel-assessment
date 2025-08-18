<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function showEmployees() 
    {
        return view('employees');
    }
} 