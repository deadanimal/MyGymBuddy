<?php

use App\Http\Controllers\ExerciseController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ExerciseController::class, 'show_home']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [ExerciseController::class, 'show_dashboard']);

    Route::get('/exercises', [ExerciseController::class, 'show_exercises']);
    Route::post('/exercises', [ExerciseController::class, 'create_exercise']);
    Route::get('/exercises/{exercise_id}', [ExerciseController::class, 'show_exercise']);
    Route::put('/exercises/{exercise_id}', [ExerciseController::class, 'update_exercise']);

    Route::get('/exercise-attempts', [ExerciseController::class, 'show_exercise_attempts']);
    Route::post('/exercise-attempts', [ExerciseController::class, 'create_exercise_attempt']);
    Route::get('/exercise-attempts/{exercise_attempt_id}', [ExerciseController::class, 'show_exercise_attempt']);
    Route::put('/exercise-attempts/{exercise_attempt_id}', [ExerciseController::class, 'update_exercise_attempt']);

    Route::get('/eats', [EatController::class, 'list_eats']);
    Route::post('/eats', [EatController::class, 'create_eat']);
    Route::get('/eats/{eat_id}', [EatController::class, 'detail_eat']);
    Route::put('/eats/{eat_id}', [EatController::class, 'update_eat']);

    Route::get('/sleeps', [SleepController::class, 'show_sleeps']);
    Route::post('/sleeps', [SleepController::class, 'create_sleep']);
    Route::get('/sleeps/{sleep_id}', [SleepController::class, 'show_sleep']);
    Route::put('/sleeps/{sleep_id}', [SleepController::class, 'update_sleep']);    

});
