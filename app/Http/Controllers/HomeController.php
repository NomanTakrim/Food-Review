<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(Request $request){
        return view('home');
    }

    public function contact(Request $request){
        $users = DB::table('usertable')->get();
        //return view('contact');
        return $users;
    }

    public function about(Request $request){
        return view('about');
    }
}
