<?php

namespace App\Http\Controllers;

use App\Models\Eat;
use Illuminate\Http\Request;

class EatController extends Controller
{
    public function list_eats(Request $request) {
        $eats = Eat::all();
        return view('eat.list', compact('eats'));
    }

    public function detail_eat(Request $request) {
        $id = (int) $request->route('eat_id');          ;
        $eat = Eat::find($id);
        return view('eat.detail', compact('eat'));
    }    

    public function create_eat(Request $request) {
        Eat::create([
            'name'=> $request->name
        ]);
        return back();
    }     

    public function update_eat(Request $request) {
        $id = (int) $request->route('eat_id');          ;
        $eat = Eat::find($id);
        $eat->update([
            'name'=> $request->name
        ]);
        return back();
    }   
}
