<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test',function(){
    return view("test");
});
Route::get('/ admin',function(){
    return view('admin.dashboard');
});
Route::get('/admin',function(){
    
});
Route::get("/user/{id}",function($id){
    if($id>=10 && $id<=20){
        return "i'm your member;";
    }else{
        return "i'm not your member";
    }
});
