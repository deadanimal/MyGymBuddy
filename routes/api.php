<?php

use App\Http\Controllers\ExerciseApiController;
use App\Http\Controllers\ProfileApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [ProfileApiController::class, 'login']);
Route::post('/register', [ProfileApiController::class, 'register']);
Route::post('/logout', [ProfileApiController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {  

    Route::get('/exercise-attempts', [ExerciseApiController::class, 'show_exercise_attempts']);
    Route::post('/exercise-attempts', [ExerciseApiController::class, 'create_exercise_attempt']);
    Route::get('/exercise-attempts/{exercise_attempt_id}', [ExerciseApiController::class, 'show_exercise_attempt']);
    Route::put('/exercise-attempts/{exercise_attempt_id}', [ExerciseApiController::class, 'update_exercise_attempt']);  

    Route::get('/food-intakes', [FoodApiController::class, 'show_food_intakes']);
    Route::post('/food-intakes', [FoodApiController::class, 'create_food_intake']);
    Route::get('/food-intakes/{food_intake_id}', [FoodApiController::class, 'show_food_intake']);
    Route::put('/food-intakes/{food_intake_id}', [FoodApiController::class, 'update_food_intake']);  
    
    Route::get('/sleeps', [FoodApiController::class, 'show_sleeps']);
    Route::post('/sleeps', [FoodApiController::class, 'create_sleep']);
    Route::get('/sleeps/{sleep_id}', [FoodApiController::class, 'show_sleep']);
    Route::put('/sleeps/{sleep_id}', [FoodApiController::class, 'update_sleep']);    

});


