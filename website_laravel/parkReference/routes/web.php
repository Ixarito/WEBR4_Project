<?php

use Illuminate\Support\Facades\Route;

//WEB
Route::get('/', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/destinations', [App\Http\Controllers\DestinationController::class, 'index']);
Route::get('/destinations/{id}', [App\Http\Controllers\DestinationController::class, 'show']);
Route::get('/park/{id}', [App\Http\Controllers\ParkController::class, 'show']);
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);
Route::get('/rides', [App\Http\Controllers\RideController::class, 'index']);
//API
Route::get('/api/search/{input}/', [App\Http\Controllers\SearchApiController::class, 'index']);
