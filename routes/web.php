<?php

use Illuminate\Support\Facades\Route;

// calling controller
use App\Http\Controllers\UserLogin;
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
 Route::get('/', function(){
     return view('welcome');
 });
 Route::view("login", "User");
 Route::post("user",[UserLogin::class, 'getData']);
