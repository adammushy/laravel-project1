<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    // this handle the login
 function login(){

    return view('login');
    
    }
    function auth(Request $request)
    { //validate
        $request -> validate([
            "email"  => "required",
            "password"  => "required",
        ]);

        //
        auth()-> attempt($request->only([
            "email",
            "password" 
        ]));
    return redirect()-> route('home');
    }
}
