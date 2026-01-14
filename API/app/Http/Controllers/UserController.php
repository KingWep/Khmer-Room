<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //index
    function index(){
        try{
            return User::all();
        } catch(\Throwable $th){
            return response()->json(
                $th->getMessage(),500
            );
        }   
    }
    function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'min:4'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:6']
            ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return response()->json([
                'message' => 'Create user successfully',
                'user' => $user
            ], 201);

        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage()
            ], 500);
        }
    }
    // delete data
    function destroy($id){
        try {
            $user = User::destroy($id);
            if($user){
                return response()->json([
                "message"=>"Delete successfully",
                "user"=>$user] , 200);
            }
            
        } catch (\Throwable $th) {
            return response()->json(['error'=>$th->getMessage()] , 500);
        }
    }
    // show data
    function show($id){
        try {
            $user = User::findOrFail($id);
            return response()->json($user, 200);
        } catch (\Throwable $th) {
            return response()->json(['error'=>$th->getMessage()],500);
        }
    }
    // update put
    function update(Request $request, $id){
        try {
           $data = $request->validate([
                'name'=>['sometimes','string','min:3'],
                'email'=>['sometimes'],
                'password'=>['sometimes']
            ]);
           $user = User::findOrFail($id);
           $user->update($data);
           return response()->json([
            'message' => 'Update successfully',
            'user'=> $user],200);
        } catch (\Throwable $th) {
            return response()->json(['error'=>$th->getMessage()] , 500);
        }
    }
    // function update(Request $request, $id){
    //     try {
            
    //     } catch (\Throwable $th) {
            
    //     }
    // }

    // function store(Request $request){
    //     try {
    //         //code...
    //         $request->validate([
    //             'name'=>['required','string','min:4'],
    //             'email'=>['required','email'],
    //             'password'=>['required']
    //         ]);
    //         $user = new User();
    //         $user->name= request('name');
    //         $user->email=request('email');
    //         $user->password=Hash::make(request('password'));
    //         $user->save();
    //         return response()->json([
    //             'message'=>'Create user successlly',
    //             'user'=> $user
    //         ],201);
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //         return response()->json($th->getMessage(),500);
    //     }
    // }
}
