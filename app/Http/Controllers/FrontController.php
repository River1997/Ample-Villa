<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function about_us(){
        return view('front.about_us.about_us');
    }

    public function register(){
        return view('front.member.member-register');
    }

    public function home(){
        return view('front.index');
    }
}
