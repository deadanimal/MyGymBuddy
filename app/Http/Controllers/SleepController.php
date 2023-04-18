<?php

namespace App\Http\Controllers;

use App\Models\Sleep;
use Illuminate\Http\Request;

class SleepController extends Controller
{
    public function list_sleeps(Request $request) {
        $sleeps = Sleep::all();
        return view('sleep.list', compact('sleeps'));
    }

    public function detail_sleep(Request $request) {
        $id = (int) $request->route('sleep_id');          ;
        $sleep = Sleep::find($id);
        return view('sleep.detail', compact('sleep'));
    }    

    public function create_sleep(Request $request) {
        Sleep::create([
            'name'=> $request->name
        ]);
        return back();
    }     

    public function update_sleep(Request $request) {
        $id = (int) $request->route('sleep_id');          ;
        $sleep = Sleep::find($id);
        $sleep->update([
            'name'=> $request->name
        ]);
        return back();
    }   
}
