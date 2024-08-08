<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;

    Route::get('/', function () { return view('dashboard');});

    Route::get('/dashboard', [DashboardController::class, 'create']);
    Route::get('/terms', function () { return view('terms');});
