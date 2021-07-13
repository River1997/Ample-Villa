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


    public function login(){
        return view('front.member.member-login');
    }
    public function success(){
        return view('front.member.success');
    }
    public function profile1(){
        return view('front.member.profile-1');
    }
    public function profile2(){
        return view('front.member.profile-2');
    }
    public function reservation1(){
        return view('front.member.reservation-1');
    }
    public function reservation2(){
        return view('front.member.reservation-2');
    }
    public function connection2(){
        return view('front.member.connection-2');
    }




    public function rent(){
        return view('front.rent.rent');
    }
    public function rentroom(){
        return view('front.rent.rent-room');
    }
    public function rentroom2(){
        return view('front.rent.rent-room2');
    }
    public function rentpay(){
        return view('front.rent.rent-pay');
    }
    public function rentdetail(){
        return view('front.rent.rent-detail');
    }
    public function rentsuccess(){
        return view('front.rent.rent-success');
    }

    public function landscape(){
        return view('front.landscape.landscape');
    }

    public function service(){
        return view('front.service.service-equipment');
    }



}
