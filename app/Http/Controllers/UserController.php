<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function edit($id){

        $record = User::find($id);

        return view('admin.user.edit', compact('record'));

    }

    public function store(Request $request){

        User::create([
            'title' =>$request->title,
            'date' => $request->date,
            'photo' =>$path??'',
        ]);

        return redirect('admin.user.index');
    }

    public function update(Request $request, $id){

        $v = Validator::make($request->all(), [
            // '欄位' '驗證規則'
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);



        if ($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }

        $old_record = User::find($id);
        $old_record ->name = $request ->name;
        $old_record ->password = Hash::make($request ->password);
        // $old_record ->role = $request ->role;
        $old_record ->save();

        return redirect('/admin/user')->with('message','成功');
    }
}
