<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseApiController extends Controller
{
    public function show_exercises(Request $request) {
        $exercises = Exercise::all();
        return response()->json([
            'data'=> $exercises,
            'message'=> ''
        ], 200);             
    }

    public function show_exercise(Request $request) {
        $id = (int) $request->route('exercise_id');          ;
        $exercise = Exercise::find($id);
        return view('exercise_detail', compact('exercise'));
    }    
}
