@extends('layouts.sample')

@section('page_title')

會員專區-聯絡我們

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-reservation-1.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-connection-2.css")) }}">
@endsection

@section('content')

<main>
    <div class="row m-auto login no-gutters">
        <div class="col  white   ">
            <div class="title-1 ">會員專區</div>
            <div class="btn-group-1 connect">
                <a href="{{ asset("/member/profile-1") }}" class="small-button">會員資料 </a>
                <a href="{{ asset("/member/reservation-1") }}" class="small-button">訂房查詢</a>
                <a href="{{ asset("/member/connection-1") }}" class="small-button active">聯絡我們</a>

            </div>
            <div class="text-1 word-connection">感謝您的意見與回饋!</div>
            <div class="text-2 word-connection">您的寶貴建議是我們進步的最大動力，
                我們會詳閱這些內容，並盡力在最短時間與您聯絡，誠摯感謝
            </div>

            <div class="button-5  ">
                <a class="btn btn-primary  profile-size " href="#" role="button">回首頁</a>
            </div>
        </div>
    </div>
</main>

@endsection

