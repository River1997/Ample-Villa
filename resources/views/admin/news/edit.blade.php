@extends('layouts.app')

@section('page_title')

    編輯最新消息

@endsection

@section('css')

@endsection


@section('content')

    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('/home')}}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{asset('admin/news')}}">最新消息</a></li>
                <li class="breadcrumb-item active" aria-current="page">編輯最新消息</li>
            </ol>
        </nav>

        <h1>編輯</h1>

        <form method="POST" action="{{ asset('/admin/news/update') }}/{{ $record->id }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">日期
                </label>
                <input type="text" class="form-control" id="title" value="{{ $record->title }}" name="title">
            </div>

            <div class="form-group">
                <label for="date">日期
                </label>
                <input type="text" class="form-control" id="date" value="{{ $record->date }}" name="date">
            </div>

            <div class="form-group">
                <label for="photo">圖片</label>
                <img style="width: 200px" src="{{ asset($record ->photo) }}" alt="">
                <input type="file" class="form-control" id="photo" placeholder="photo" name="photo" multiple>
            </div>

            <button type="submit" class="btn btn-primary">編輯</button>
        </form>

    </div>

@endsection


@section('js')

@endsection
