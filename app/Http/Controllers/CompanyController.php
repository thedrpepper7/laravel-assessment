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

    public function deleteCompany(Request $request) 
    {

        $request->validate([
            'id' => 'required|exists:companies,id'
        ]);

        $company = Company::find($request->id);
        $company->delete();

        return redirect()->back()->with('success', 'Company deleted successfully.');
    }

    public function append(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|max:255',
            'logo' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
        ]);

        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $request->logo,
            'website' => $request->website,
        ]);

        return redirect()->back()->with('success', 'Company added successfully.');
    }
}


