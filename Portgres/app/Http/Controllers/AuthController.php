<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    // Register
    public function register(Request $request){   
        try {
            $request->validate([
                'name'=>['required'],
                'email'=>['required','email','unique:users,email'],
                'password'=>['required','confirmed']
            ]);
            $user = new User;
            $user->name = request('name');
            $user->email = request('email');
            $user->password = Hash::make(request('password'));
            $user->save();
            return response()->json([
                'message'=>'register successfully',
                'user'=>$user
            ],201);
        } catch (\Throwable $th) {
            return response()->json([
                'message'=>$th->getMessage()
            ],500);
        }
    }

    // Login
    public function login(Request $request){
        try {
            $credentails = $request->validate([
                'email'=>['required','email'],
                'password'=>['required']
            ]);
            if(!Auth::attempt($credentails)){
               return response()->json([
                'message'=>'Invalide Email or Password'
               ]); 
            }
            $user = User::with('role')->find(Auth::id());

            $token = $user->createToken('email')->plainTextToken;
            return response()->json([
                'token'=> $token,
                'user'=> $user
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'message'=>$th->getMessage(),4
            ],500);
        }
    }
}
