<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[ProductController::class,"index"]);
Route::post('/store',[ProductController::class,'store']);
Route::get('/show/{id}',[ProductController::class,'show']);
Route::get('/destroy/{id}',[ProductController::class,"destroy"]);
// Route::get('/create',[ProductController::class,"create"]);
Route::fallback(function(){
    return "Your route has problem!!!";
});