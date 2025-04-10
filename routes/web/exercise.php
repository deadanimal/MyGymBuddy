<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExerciseController;

Route::middleware('auth')->group(function () {

    Route::get('/exercises', [ExerciseController::class, 'show_exercises']);
    Route::post('/exercises', [ExerciseController::class, 'create_exercise']);
    Route::get('/exercises/{exercise_id}', [ExerciseController::class, 'show_exercise']);
    Route::put('/exercises/{exercise_id}', [ExerciseController::class, 'update_exercise']);

    Route::get('/exercise-attempts', [ExerciseController::class, 'show_exercise_attempts']);
    Route::post('/exercise-attempts', [ExerciseController::class, 'create_exercise_attempt']);
    Route::get('/exercise-attempts/{exercise_attempt_id}', [ExerciseController::class, 'show_exercise_attempt']);
    Route::put('/exercise-attempts/{exercise_attempt_id}', [ExerciseController::class, 'update_exercise_attempt']); 

});