<?php

namespace App\Http\Controllers;

use App\Models\FoodIntake;
use Illuminate\Http\Request;

class FoodApiController extends Controller
{
    public function show_food_intakes(Request $request) {
        $food_intakes = FoodIntake::all();
        return response()->json([
            'data'=> $food_intakes,
            'message'=> ''
        ], 200);             
    }

    public function show_food_intake(Request $request) {
        $id = (int) $request->route('food_intake_id');
        $food_intake = FoodIntake::find($id);
        return response()->json([
            'data'=> $food_intake,
            'message'=> ''
        ], 200);    
    }  

    public function create_food_intake(Request $request) {

        $food_intake = FoodIntake::create([]);
        return response()->json([
            'data'=> $food_intake,
            'message'=> ''
        ], 200);    
    }         
    
    public function update_food_intake(Request $request) {
        $id = (int) $request->route('food_intake_id');
        $food_intake = FoodIntake::find($id);
        $food_intake->update([
            
        ]);
        return response()->json([
            'data'=> $food_intake,
            'message'=> ''
        ], 200);    
    }        
}
