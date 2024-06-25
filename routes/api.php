<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

use App\Http\Controllers\Api\SmartboardController;

Route::get('/users', [SmartboardController::class, 'getUsers']);
Route::post('/calculate', [SmartboardController::class, 'calculate']);