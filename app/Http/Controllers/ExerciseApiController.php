<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\ExerciseAttempt;
use Illuminate\Http\Request;

class ExerciseApiController extends Controller
{
    public function show_exercise_attempts(Request $request) {
        $exercise_attempts = Exercise::all();
        return response()->json([
            'data'=> $exercise_attempts,
            'message'=> ''
        ], 200);             
    }

    public function show_exercise_attempt(Request $request) {
        $id = (int) $request->route('exercise_id');          ;
        $exercise_attempt = ExerciseAttempt::find($id);
        return response()->json([
            'data'=> $exercise_attempt,
            'message'=> ''
        ], 200);   
    }   
    
    public function create_exercise_attempt(Request $request) {

        $exercise_attempt = ExerciseAttempt::create([]);
        return response()->json([
            'data'=> $exercise_attempt,
            'message'=> ''
        ], 201);    
    }         
    
    public function update_exercise_attempt(Request $request) {
        $id = (int) $request->route('exercise_attempt_id');
        $exercise_attempt = ExerciseAttempt::find($id);
        $exercise_attempt->update([
            
        ]);
        return response()->json([
            'data'=> $exercise_attempt,
            'message'=> ''
        ], 200);    
    }         
}
