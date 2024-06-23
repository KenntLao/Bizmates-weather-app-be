<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WeatherController;
use App\Http\Controllers\PlaceController;

Route::get('api/weather', [WeatherController::class, 'index']);
Route::get('api/places/search', [PlaceController::class, 'index']);