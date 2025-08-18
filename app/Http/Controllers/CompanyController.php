<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('index', compact('companies'));

    }

    public function delete(Request $request) 
    {

        $request->validate([
            'id' => 'required|exists:companies,id'
        ]);

        $company = Company::find($request->id);
        $company->delete();

        return redirect()->back()->with('success', 'Company deleted successfully.');
    }
}


