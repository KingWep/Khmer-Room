<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
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
// Route::get('/',function(){
//     return view('nav.Nav');
// });
// Route::get('/home',function(){
//     return view('nav.Home');
// });
// Route::get('/about',function(){
//     return view('nav.About');
// });
// Route::get('/contact',function(){
//     return view('nav.Contact');
// });
Route::get('/',function(){
    return view('nav.Nav');
});
Route::get('/home',[HomePageController::class,"display"]);
Route::get('/contact', [ContactController::class, 'Con']);