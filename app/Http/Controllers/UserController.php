<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

        $lists = User::get();

        return view('admin.user.index',compact('lists'));
    }
}
