<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::apiResource('cars', CarController::class);   
// Route::apiResource('users', UserController::class)->only(['index', 'show']);
// Route::apiResource('posts', PostController::class)->except(['destroy']);

