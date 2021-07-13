@extends('layouts.sample')

@section('page_title')

成功註冊

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-success.css")) }}">

@endsection

@section('content')


<div class="row m-auto login no-gutters">
    <div class="col  white   ">
        <div class="title ">註冊完成</div>
        <div class="welcome success-pad">歡迎來到 Ample Villa</div>
        <div class="text-1 success-pad">恭喜您完成註冊</div>
        <div class="text-2 success-pad">請到您的信箱啟動驗證信件</div>
        <div class="text-3 success-pad">若您未能收到驗證信件</div>
        <div class="text-4 success-pad">1.請確認電件帳號是否正確</div>
        <div class="text-5 success-pad">2.請確認郵件是否被分到垃圾信件夾內</div>
        <div class="text-6 success-pad">3.請確認完以上兩項內容之後，若人無法收到驗證信件，請嘗試下列的方法</div>
        <div class="text-7 success-padmore "><a href="">重傳郵件</a></div>
        <div class="button-4 ">
            <a class="btn btn-primary success  " href="{{asset("/")}}" role="button">回首頁</a>
        </div>
    </div>
</div>

@endsection







