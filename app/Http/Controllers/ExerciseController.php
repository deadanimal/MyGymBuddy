<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{

    public function show_home(Request $request) {
        return redirect('/exercises');
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
    
    public function create_exercise_attempt(Request $request) {
        Exercise::create([
            'name'=> $request->name
        ]);
        return back();
    }     

    public function update_exercise_attempt(Request $request) {
        $id = (int) $request->route('exercise_id');          ;
        $exercise = Exercise::find($id);
        $exercise->update([
            'name'=> $request->name
        ]);
        return back();
    }         

}
