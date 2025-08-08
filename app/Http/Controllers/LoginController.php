<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller

{
    public function showLoginForm()
    {
        return view('authentication');
    }

    public function login()
    {
        $login = $request->validate([
            'email' => ['required', 'email']
        ])
    }

}