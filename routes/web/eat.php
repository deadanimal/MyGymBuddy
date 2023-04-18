<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EatController;

Route::middleware('auth')->group(function () {

    Route::get('/eats', [EatController::class, 'list_eats']);
    Route::post('/eats', [EatController::class, 'create_eat']);
    Route::get('/eats/{eat_id}', [EatController::class, 'detail_eat']);
    Route::put('/eats/{eat_id}', [EatController::class, 'update_eat']);

});