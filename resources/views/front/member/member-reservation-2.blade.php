@extends('layouts.sample')

@section('page_title')

會員專區-訂單資訊

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-reservation-1.css")) }}">
<link rel="stylesheet" href="{{ asset("css/member-profile-1.css") }}">
<link rel="stylesheet" href="{{ asset("css/member-reservation-2.css") }}">
@endsection

@section('content')


<main>
    <div class="row m-auto login no-gutters">
        <div class="col  white   ">
            <div class="title-1 ">會員專區</div>
            <div class="btn-group-1">
                <a href="{{ asset("/member/profile-1") }}" class="small-button ">會員資料 </a>
                <a href="{{ asset("/member/reservation-1") }}" class="small-button active">訂房查詢</a>
                <a href="{{ asset("/member/connection-1") }}" class="small-button">聯絡我們</a>
            </div>
            <form class="profile-form">
                <fieldset disabled>
                    <div class="form-row form-number ">
                        <div class="form-group col-sm-6 ">
                            <label class="word-1" for="disabledTextInput">姓名</label>
                            <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                                placeholder="王翠花">
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="word-1" for="disabledTextInput">付款方式</label>
                            <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                                placeholder="網路信用卡付款">
                        </div>
                    </div>
                    <div class="form-row form-number ">
                        <div class="form-group col-sm-6 ">
                        <label class="word-1" for="disabledTextInput">電話</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control " placeholder="0912345678">
                        </div>
                        <div class="form-group col-sm-6">
                        <label class="word-1" for="disabledTextInput">信箱</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control " placeholder="abc123456789@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="word-1" for="disabledTextInput">航班編號</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                            placeholder="0000-0000-0000">
                    </div>
                    <div class="form-row form-number ">
                        <div class="form-group col-sm-6 ">
                        <label class="word-1" for="disabledTextInput">入房時間</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control " placeholder="2021-07-02">
                        </div>
                        <div class="form-group col-sm-6">
                        <label class="word-1" for="disabledTextInput">退房時間</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control " placeholder="2021-07-04">
                        </div>
                    </div>
                    <div class="form-row form-number ">
                        <div class="form-group col-sm-6">
                        <label class="word-1" for="disabledTextInput">住宿天數</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control " placeholder="2">
                        </div>
                        <div class="form-group col-sm-6">
                        <label class="word-1" for="disabledTextInput">住宿人數</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control " placeholder="4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="word-1" for="disabledTextInput">抵達時間</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control " placeholder="12:00~13:00">
                    </div>
                    <div class="form-group">
                        <label class="word-1" for="disabledTextInput">預定房型</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "placeholder="Veuns 豪華房">
                    </div>
                    <div class="form-row form-number ">
                        <div class="form-group col-sm-6">
                        <label class="word-1" for="disabledTextInput">數量</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control " placeholder="1">
                        </div>
                        <div class="form-group col-sm-6">
                        <label class="word-1" for="disabledTextInput">價錢</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control " placeholder="NT$32,795">
                        </div>
                    </div>
                    <div class="form-group reservation-bot">
                        <label class="word-1" for="disabledTextInput">備註</label>
                        <input type="text" style="height: 80px;" id="disabledTextInput" class="form-control "placeholder="小孩4歲">


                    </div>
                </fieldset>

            </form>
            <div class="button-5  ">
                <a class="btn btn-primary  profile-size " href="{{ asset("/member/reservation-1") }}" role="button">上一頁</a>
            </div>
        </div>

    </div>
</main>

@endsection

