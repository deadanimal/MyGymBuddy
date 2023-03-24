<?php

use App\Http\Controllers\ExerciseController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ExerciseController::class, 'show_home']);

Route::get('/exercises', [ExerciseController::class, 'show_exercises']);
Route::post('/exercises/', [ExerciseController::class, 'create_exercises']);
Route::get('/exercises/{exercise_id}', [ExerciseController::class, 'show_exercise']);
Route::put('/exercises/{exercise_id}', [ExerciseController::class, 'update_exercise']);

Route::get('/exercise_attempts', [ExerciseController::class, 'show_exercise_attempts']);
Route::post('/exercise_attempts/', [ExerciseController::class, 'create_exercise_attempts']);
Route::get('/exercise_attempts/{exercise_attempt_id}', [ExerciseController::class, 'show_exercise_attempt']);
Route::put('/exercise_attempts/{exercise_attempt_id}', [ExerciseController::class, 'update_exercise_attempt']);