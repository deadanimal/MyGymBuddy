<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/token', [ProfileController::class, 'create_token']);
Route::post('/device', [ProfileController::class, 'create_device']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
