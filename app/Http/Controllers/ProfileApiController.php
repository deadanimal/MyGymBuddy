<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileApiController extends Controller
{
    public function login(Request $request) {
        $validated = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();
        
        # Check exists or not
        if(is_null($user)) {
            return response()->json([
                'error'=> 50001,
                'message'=> 'User not found'
            ], 500);   
        }

        if(!$user || !Hash::check($request->password, $user->password)) {
            // throw ValidationException::withMessages([
            //     'email' => ['The provided credentials are incorrect']
            // ]);
            return response()->json([
                'error'=> 50002,
                'message'=> 'Credentials are incorrect'
            ], 500);               
        }

        $user->tokens()->delete();

        return response()->json([
            'message' => 'Login successful',
            'token'=> $user->createToken($request->email)->plainTextToken
        ], 200);
    }

    public function register(Request $request)    
    {        
        $user = (new CreateNewUser)->create($request->all());             
        return response([
            'message' => 'Registration is successful',
            'token'=> $user->createToken($request->email)->plainTextToken
        ])->json($user, 204);    
    }    

    public function logout(Request $request)    {  
        
        $user = $request->user();    
        $user->tokens()->delete(); 
           
        return response()->json([            
            "message" => "Logged out successfully"        
        ], 200);    
    }   
}
