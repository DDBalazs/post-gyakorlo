<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanulokController;
use App\Http\Controllers\KlippekController;


Route::get('/', [TanulokController::class, 'Tanulok']);
Route::post('/', [TanulokController::class, 'TanulokData']);

Route::get('/klippek', [KlippekController::class, 'Klipp']);
Route::post('/klippek', [KlippekController::class, 'KlippData']);
