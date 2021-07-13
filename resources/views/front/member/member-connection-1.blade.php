@extends('layouts.sample')

@section('page_title')

會員專區-聯絡我們

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-reservation-1.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-connection-3.css")) }}">

@endsection

@section('headjs')
<!-- summernote     -->

@endsection

@section('content')

<div class="row m-auto login no-gutters">
    <div class="col  white   ">
        <div class="title-1 ">會員專區</div>
        <div class="btn-group-1 connect">
            <a href="{{ asset("/member/profile-1") }}" class="small-button active">會員資料 </a>
            <a href="{{ asset("/member/reservation-1") }}" class="small-button">訂房查詢</a>
            <a href="{{ asset("/member/connection-1") }}" class="small-button">聯絡我們</a>

        </div>
        <div class="title-2">給予Ample Villa 的意見與回饋</div>

        <div class="connect-to-us-box">
            <div id="connect-to-us"></div>
        </div>


        <div class="button-5  ">
            <a class="btn btn-primary  profile-size " href="{{ asset("/member/connection-2") }}" role="button">送出</a>
        </div>

    </div>
</div>

@endsection
