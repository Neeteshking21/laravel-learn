<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLogin extends Controller
{
    //
    function getData(Request $req){
        return $req->input();
    }
}