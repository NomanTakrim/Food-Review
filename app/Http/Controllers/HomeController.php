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
        return view('contact');
    }

    public function about(Request $request){
        return view('about');
    }
}
