<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\HttpCache\Store;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/test',function(){
    return 'Hello API';
});
Route::get('/user',[UserController::class,'index']);
Route::post('/user',[UserController::class,'store']);
Route::delete('/user/{id}',[UserController::class,'destroy']);
Route::put('/user/{id}',[UserController::class,'update']);
Route::get('/user/{id}',[UserController::class,'show']);
Route::patch('/user/{id}',[UserController::class,'update']);

// Product
Route::get('/product',[ProductController::class,'index']);
Route::post('/product',[ProductController::class,'store']);
Route::get('/product/{id}',[ProductController::class,'show']);
Route::delete('/product/{id}',[ProductController::class,'destroy']);
Route::put('/product/{id}',[ProductController::class,'update']);