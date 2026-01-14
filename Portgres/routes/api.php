<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/users',[UserController::class,'index']);
Route::post('/users',[UserController::class,'store']);
Route::put('/users/{id}',[UserController::class,'update']);
Route::delete('/users{id}',[UserController::class,'destroy']);

// Public Route
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register',[AuthController::class,'register']);

Route::middleware("auth.sanctum")->group(function(){
    Route::post('/role',[RoleController::class,'store']);
    Route::get('/role',[RoleController::class,'index']);
    Route::get('/role/{id}',[RoleController::class,'show']);
    Route::put('/role/{id}',[RoleController::class,'update']);
    Route::delete('/role/{id}',[RoleController::class,'destroy']);
});
