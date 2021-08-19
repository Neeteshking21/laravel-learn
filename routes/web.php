<?php

use Illuminate\Support\Facades\Route;

// calling controller
use App\Http\Controllers\Users;
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

Route::get('/king/{name}', function ($name) {
    return view('hello', ['name'=>$name]);
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/king', function () {
    return redirect("home"); // When you want to redirect page to another page instead of given url page    
});
// Short way to view pages
Route::get('/about', function(){
    return view('about');
});
Route::get("about/{value}", [Users::class, 'callView']);
Route::view("home", "home");



// Using Controller(Users.php)

Route::get("/controller/{name}", [Users::class,'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
