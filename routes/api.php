<?php

use App\Http\Controllers\ExerciseApiController;
use App\Http\Controllers\ProfileApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [ProfileApiController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/exercises', [ExerciseApiController::class, 'show_exercises']);
    Route::post('/exercises/', [ExerciseApiController::class, 'create_exercise']);
    Route::get('/exercises/{exercise_id}', [ExerciseApiController::class, 'show_exercise']);
    Route::put('/exercises/{exercise_id}', [ExerciseApiController::class, 'update_exercise']);    

    Route::get('/exercise-attempts', [ExerciseApiController::class, 'show_exercise_attempts']);
    Route::post('/exercise-attempts/', [ExerciseApiController::class, 'create_exercise_attempt']);
    Route::get('/exercise-attempts/{exercise_attempt_id}', [ExerciseApiController::class, 'show_exercise_attempt']);
    Route::put('/exercise-attempts/{exercise_attempt_id}', [ExerciseApiController::class, 'update_exercise_attempt']);    
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
