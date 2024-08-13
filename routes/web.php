<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;

    Route::get('/', [DashboardController::class, 'create'])->name('/');
    Route::get('/ideas', [DashboardController::class, 'create'])->name('ideas.create');

    Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');
    Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');

