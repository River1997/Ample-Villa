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

    public function create(){

        return view('admin.user.create');
    }

    public function store(Request $request){

        User::create([
            'title' =>$request->title,
            'date' => $request->date,
            'photo' =>$path??'',
        ]);

        return redirect('admin.user.index');
    }
}
