<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('register', [RegisterController::class,'register']);
Route::post('register',[RegisterController::class,'store'])->name('auth.register');


Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'authenticate'])->name('auth.login');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/home',[UserController::class,'index'])->name('user.index');
