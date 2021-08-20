<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLogin extends Controller
{
    //
    function getData(Request $req){
        $req->validate([
            'username'=>'required | max:30',
            'password'=> 'required | min:6'
        ]);
        return $req->input();
    }
}
