<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterLoginController extends Controller
{
    //show register form
    function ShowRegister(){
        return view("ShowRegister");
    }

    // show login form
    function ShowLogin(){
        return view("ShowLogin");
    }

    // store register form
    function StoreRegisterForm(Request $request){
        $request->validate([
            'name'=>['required'],
            'email'=>['email','required'],
            'password'=>['required','min:3','confirmed']
        ]);
        $user = new User();
        $user->name = request('name');
        $user->email = request("email");
        $user->password = Hash::make(request('password'));
        $user->save();
        return redirect('/show-login');
    }

    // store login form
    function StoreLoginForm(Request $request){
        $credentials= $request->validate([
                        'email'=>['email','required'],
                        'password'=>['required','min:3']
                    ]);
        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }
        return redirect('/')->with('success', 'Login successful!');;
    }
}
