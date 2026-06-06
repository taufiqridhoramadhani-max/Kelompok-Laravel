<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsiController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/isi', [IsiController::class, 'index']);