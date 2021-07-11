@extends('layouts.app')

@section('page_title')

新增消息

@endsection

@section('css')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection


@section('content')

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/home')}}">首頁</a></li>
            <li class="breadcrumb-item"><a href="{{asset('admin/news')}}">最新消息</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增消息</li>
        </ol>
    </nav>

    <h1>新增</h1>

    <form method="POST" action="{{ asset('/admin/news/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="date">日期</label>
            <input type="text" class="form-control" id="date" name="date">
        </div>

        <div class="form-group">
            <label for="photo">圖片</label>
            <input type="file" class="form-control" id="photo" placeholder="photo" name="photo" >
        </div>

        <button type="submit" class="btn btn-primary">新增</button>
    </form>

</div>

@endsection


@section('js')

<script>
    $(document).ready(function() {
        $('#content').summernote();
        });
</script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection
