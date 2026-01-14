<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/table', [UserController::class, "index"])->name("table");
// Route::get('/',function(){
//     return view('home');
// })->name('home');
Route::get('/create',[TeacherController::class,'create'])->name("create");
Route::get('/',[TeacherController::class,'index'])-> name("");
Route::post('/store',[TeacherController::class,'store'])-> name("store");
Route::fallback(function(){
    return "Route has problem";
});
Route::get("/show/{id}", [TeacherController::class,"show"]);
Route::get("/destroy/{id}", [TeacherController::class,"destroy"]);