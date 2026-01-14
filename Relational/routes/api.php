<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Categories
Route::get('/categories', [CategoriesController::class,'index']);
Route::post('/categories', [CategoriesController::class,'store']);
 
// Product
Route::get('/product',[ProductController::class,'index']);
Route::post('/product',[ProductController::class,'store']);