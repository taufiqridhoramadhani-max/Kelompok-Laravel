<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/isi', [IsiController::class, 'index'])->name('isi');

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard - accessible by authenticated users
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile - accessible by authenticated users
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Project - accessible by authenticated users with 'admin' or 'staff' role
    Route::middleware(['role:admin|staff'])->group(function () {
        Route::resource('project', ProjectController::class)->except(['show']);
    });
});

require __DIR__.'/auth.php';
