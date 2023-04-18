<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SleepController;

Route::middleware('auth')->group(function () {

    Route::get('/sleeps', [SleepController::class, 'list_sleeps']);
    Route::post('/sleeps', [SleepController::class, 'create_sleep']);
    Route::get('/sleeps/{sleep_id}', [SleepController::class, 'detail_sleep']);
    Route::put('/sleeps/{sleep_id}', [SleepController::class, 'update_sleep']);    

});