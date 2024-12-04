<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanulokController;


Route::get('/', [TanulokController::class, 'Tanulok']);
Route::post('/', [TanulokController::class, 'TanulokData']);

