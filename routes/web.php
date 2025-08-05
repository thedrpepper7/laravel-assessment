<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('authentication');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('testpage');
});

