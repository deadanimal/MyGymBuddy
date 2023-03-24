<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\ExerciseAttempt;
use App\Models\ExerciseSet;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{

    public function show_home(Request $request) {
        return redirect('/dashboard');
    }

    public function show_dashboard(Request $request) {
        return view('dashboard');
    }    

    public function show_exercises(Request $request) {
        $exercises = Exercise::all();
        return view('exercise_list', compact('exercises'));
    }

    public function show_exercise(Request $request) {
        $id = (int) $request->route('exercise_id');          ;
        $exercise = Exercise::find($id);
        return view('exercise_detail', compact('exercise'));
    }    

    public function create_exercise(Request $request) {
        Exercise::create([
            'name'=> $request->name
        ]);
        return back();
    }     

    public function update_exercise(Request $request) {
        $id = (int) $request->route('exercise_id');          ;
        $exercise = Exercise::find($id);
        $exercise->update([
            'name'=> $request->name
        ]);
        return back();
    }   

    public function create_exercise_set(Request $request) {
        ExerciseSet::create([
            'exercise_id'=> $request->exercise_id,
        ]);
        return back();
    }       
    
    public function create_exercise_attempt(Request $request) {
        ExerciseAttempt::create([
            'exercise_id'=> $request->exercise_id,
            'weight'=> $request->weight,
            'repetition'=> $request->repetition,
            'remarks'=> $request->remarks,
        ]);
        return back();
    }     

    public function update_exercise_attempt(Request $request) {
        $id = (int) $request->route('exercise_attempt_id');          ;
        $exercise = ExerciseAttempt::find($id);
        $exercise->update([
            'exercise_id'=> $request->exercise_id,
            'weight'=> $request->weight,
            'repetition'=> $request->repetition,
            'remarks'=> $request->remarks,
        ]);
        return back();
    }         

}
