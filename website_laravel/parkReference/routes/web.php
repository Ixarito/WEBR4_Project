<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);
