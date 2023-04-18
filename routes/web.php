<?php

use App\Http\Controllers\EatController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\SleepController;


use Illuminate\Support\Facades\Route;


Route::get('/', [ExerciseController::class, 'show_home']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [ExerciseController::class, 'show_dashboard']);

});

require __DIR__.'/web/eat.php';
require __DIR__.'/web/exercise.php';
require __DIR__.'/web/measurement.php';
require __DIR__.'/web/sleep.php';