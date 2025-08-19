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
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'website' => 'nullable|string|max:255',
        ]);

        $logoName = null;

        if($request->hasFile('logo')) {
            $logoName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('storage/logos'), $logoName);
        }

        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $logoName,
            'website' => $request->website,
        ]);

        return redirect()->back()->with('success', 'Company added successfully.');
    }
}


