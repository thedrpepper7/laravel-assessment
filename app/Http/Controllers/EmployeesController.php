<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index() 
    {
        $employees = Employee::all();

        return view('employees', compact('employees'));
    }

    public function deleteEmployee(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:employees,id'
        ]);

        $employee = Employee::find($request->id);
        $employee->delete();

        return redirect()->back()->with('success', 'Company deleted successfully.');

    }

    public function append(Request $request)
    {
        $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'company'      => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20'
        ]);

        Employee::create([
            'first_name'   => $request->first_name,
            'last_name'    => $request->last_name,
            'company'      => $request->company,
            'email'        => $request->email,
            'phone_number' => $request->phone_number
    ]);

        return redirect()->back()->with('success', 'Employee added successfully.');
        
    }

} 