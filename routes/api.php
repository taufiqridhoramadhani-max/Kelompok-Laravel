<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectApiController;

Route::apiResource('projects', ProjectApiController::class);
