<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyticsController;


Route::get('/countries', [AnalyticsController::class, 'getCountries']);
Route::get('/entries', [AnalyticsController::class, 'getEntries']);
Route::get('/regions', [AnalyticsController::class, 'getRegions']);

Route::get('/regions/{id}/nombre/{nombre}', [AnalyticsController::class, 'getRegion']);