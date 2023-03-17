<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    //this handle register

    function register(){
        return view('register');
    }

    // 
    function store(Request $request){
        ///it validates
        $request->validate([
            "name" => "required",
            "email"=>"required|email|unique:users",// here we validate thje email to be unique also to be in accepted format
            "password"  => "required|confirmed",//it confirms password by checking confirm password field
        ]);


        $user = User::create([ // creeates user  and if it gives error u have to include the model
            "name" => $request->name,
            "email"=>$request->email,
            "password"  => Hash::make($request->password),
            // "c_password"  =>$request->c_password,
            
        ]);
}
}
