<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\SensorController;

// Route::get('/', [SensorController::class, 'index']);
Route::get('/fetch-data', [SensorController::class, 'fetchData']);

Route::get('/', [SensorController::class, 'home'])->name('home');
Route::get('/select-player', [SensorController::class, 'selectPlayer'])->name('select-player');
Route::post('/run-smartboard', [SensorController::class, 'runSmartboard'])->name('run-smartboard');
