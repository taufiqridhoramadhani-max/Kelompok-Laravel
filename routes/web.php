<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsiController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Public Route
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/isi', [IsiController::class, 'index']);

Route::get('/project', [ProjectController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Auth Route
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/project/create', [ProjectController::class, 'create']);

    Route::post('/project', [ProjectController::class, 'store']);

    Route::get('/project/{project}/edit', [ProjectController::class, 'edit']);

    Route::put('/project/{project}', [ProjectController::class, 'update']);

    Route::delete('/project/{project}', [ProjectController::class, 'destroy']);

});

/*
|--------------------------------------------------------------------------
| Breeze Route
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';