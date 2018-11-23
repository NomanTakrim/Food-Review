<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup(Request $request){
        //return "Got You from singup !!";
        return view('signup');
    }

    public function login(Request $request){
        return "Got You from login!!";
    }
}
