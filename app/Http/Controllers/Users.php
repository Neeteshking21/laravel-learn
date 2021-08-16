<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //

    public function index($name){
        echo ' Hello '.$name.' from Controller';
    }

    // calling View ,named about, from Controller

    public function callView($arg){
        return view('about', ['name'=>$arg]);
    }
}
