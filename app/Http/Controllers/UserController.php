<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signup(Request $request){
        if ($request->session()->exists('user')){
            return view('home');
        }
        return view('signup');
    }

    public  function  saveuser(Request $request){
        //check validation

        //retrieve user information
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirmpassword = $request->input('confirmpassword');

        //password is valid with confirm password
        if ($password !=$confirmpassword){
            return view('signup');
        }

        //insert user to db
        DB::insert(' INSERT INTO usertable (name, email, password) VALUES (?, ?,?)', [$name, $email,$password]);

        //session save user email
        session(['user' => $email]);
        //redirect to home page
        return view('home');
    }

    public function login(Request $request){
        if ($request->session()->exists('user')){
            return view('home');
        }
        return view('singin');
    }

    public function userlogin(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');

        //find user with email
       // SELECT * FROM `usertable` WHERE usertable.email = 'test3@email.com1'

        $user = DB::select('SELECT * FROM `usertable` WHERE usertable.email = ?', [$email]);

        if ($user==null){
            return view('signup');
        }

        $pass = $user[0]->password;
        //check password
        if ($password != $pass){
            return view('singin');
        }
        //redirect to home page
        session(['user' => $email]);
        return view('home');
    }

    public function logout(Request $request){
        //delete session
        //$request->session()->flush();
        $request->session()->forget('user');
        //redirect to login page
        return view('singin');
    }
}
