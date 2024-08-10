<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;

    Route::get('/', function () { return view('main');});

    Route::get('/terms', function () { return view('terms');});

    Route::get('/dashboard', [DashboardController::class, 'create'])->name('dashboard');

    Route::get('/idea', [DashboardController::class, 'index'])->name('idea.index');
    Route::post('/idea', [IdeaController::class, 'store'])->name('idea.create');

