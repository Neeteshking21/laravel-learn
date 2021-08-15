<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/{name}', function ($name) {
    return view('hello', ['name'=>$name]);
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/king', function () {
    return redirect("home"); // When you want to redirect page to another page instead of given url page    
});

Route::view("about", "about");
Route::view("home", "home");

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
