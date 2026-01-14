<?php

use App\Http\Controllers\RegisterLoginController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard',function(){
//     return view("dashboard");
// });
Route::get('/show-register',[RegisterLoginController::class,"ShowRegister"]);
Route::get('/show-login',[RegisterLoginController::class,'ShowLogin'])->name('show-login');
Route::post('/store-register-form',[RegisterLoginController::class,'StoreRegisterForm']);
Route::post('/store-login-form',[RegisterLoginController::class,'StoreLoginForm']);
// Route::middleware(['auth'])->group(function(){
//     Route::get('/dashboard',function(){
//         return view('dashboard');
//     });
// });
Route::middleware(['auth', 'checkRole:admin'])->group(function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    });
});

