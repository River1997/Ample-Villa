<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    //

    public function index(){
        $lists = News::get();
        return view('admin.news.index',compact('lists'));
    }

    public function create(){
        $record = News::get();
        return view('admin.news.create',compact('record'));
    }

    public function store(Request $request){
        if($request->photo){
            $path = FileController::imageUpload($request->file('photo'));
        };
        News::create([
            'title' =>$request->title,
            'date' => $request->date,
            'photo' =>$path??'',
        ]);
        return redirect('/admin/news')->with('message','成功');
    }

    public function edit($id){

        $record = News::find($id);

        return view('admin.news.edit',compact('record'));

    }

    public function update(Request $request, $id){
        $old_record = News::find($id);
        if($request->photo){
            File::delete(public_path() . $request->photo);
            $file = $request ->file('photo');
            if(!is_dir('upload/')){
                mkdir('upload/');
            }
            $extenstion = $request->photo->getClientOriginalExtension();
            $fliename = md5(uniqid(rand())) . '.' . $extenstion;
            $path = '/upload/' . $fliename;
            move_uploaded_file($file, public_path() . $path);
            $old_record->photo = $path;
        };
        $old_record->title = $request->title;
        $old_record->date = $request->date;
        $old_record->save();
        return redirect('/admin/news')->with('message','編輯成功');

    }


    public function delete(Request $request, $id){
        $old_record = News::find($id);
        File::delete(public_path() . $old_record ->photo);
        $old_record ->delete();
        return redirect('/admin/news')->with('message','刪除成功');
    }


}
