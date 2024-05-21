<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'show']);

Route::get('/search', [App\Http\Controllers\DestinationController::class, 'index']);

Route::get('/destination/{id}', [App\Http\Controllers\DestinationController::class, 'show']);

Route::get('/park/{id}', [App\Http\Controllers\ParkController::class, 'show']);
