<?php

namespace App\Http\Controllers;

use App\Models\Sleep;
use Illuminate\Http\Request;

class SleepApiController extends Controller
{
    public function show_sleeps(Request $request) {
        $sleeps = Sleep::all();
        return response()->json([
            'data'=> $sleeps,
            'message'=> ''
        ], 200);             
    }

    public function show_sleep(Request $request) {
        $id = (int) $request->route('sleep_id');
        $sleep = Sleep::find($id);
        return response()->json([
            'data'=> $sleep,
            'message'=> ''
        ], 200);    
    }  
    
    public function create_sleep(Request $request) {

        $sleep = Sleep::create([]);
        return response()->json([
            'data'=> $sleep,
            'message'=> ''
        ], 200);    
    }         
    
    public function update_sleep(Request $request) {
        $id = (int) $request->route('sleep_id');
        $sleep = Sleep::find($id);
        $sleep->update([

        ]);
        return response()->json([
            'data'=> $sleep,
            'message'=> ''
        ], 200);    
    }         
}
