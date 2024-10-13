<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.dashboard.dashboard-auth');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('layouts.dashboard.dashboard-user');
})->middleware('auth');
