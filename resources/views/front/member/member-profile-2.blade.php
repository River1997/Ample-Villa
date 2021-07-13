@extends('layouts.sample')

@section('page_title')

會員專區-編輯會員

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-profile-2.css")) }}">
@endsection

@section('content')

<div class="row m-auto login no-gutters">
    <div class="col  white   ">
        <div class="title-1 ">會員專區</div>
        <div class="btn-group-1">
            <a href="{{ asset("/member/profile-1") }}" class="small-button active">會員資料 </a>
            <a href="{{ asset("/member/reservation-1") }}" class="small-button">訂房查詢</a>
            <a href="{{ asset("/member/connection-1") }}" class="small-button">聯絡我們</a>
        </div>
        <form class="profile-form " action="">
            <div class="form-group  ">
                <label class="word" for="account">帳號</label>
                <input type="account" style="height: 50px;" class="form-control account" id="account">
            </div>
            <div class="form-group">
                <label class="word" for="password">密碼</label>
                <input type="password" style="height: 50px;" class="form-control password" id="password">
            </div>
            <div class="form-row form-number">
                <div class="form-group col-sm-4 ">
                    <label class="word" for="internation">國際號碼</label>
                    <select class="form-control internation" style="height: 50px;" id="internation">
                        <option>台灣(+886)</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group col-sm-8">
                    <label class="word" for="cellphone">手機號碼</label>
                    <input type="cellphone" style="height: 50px;" class="form-control cellphone" id="cellphone">
                </div>
            </div>
            <div class="form-group">
                <label class="word" for="email">電子信箱</label>
                <input type="email" style="height: 50px;" class="form-control email" id="email">
            </div>
            <div class="form-row  form-number-date">
                <div class="form-group col-sm-6 ">
                    <label class="word" for="birthday">出生年</label>
                    <select class="form-control birthday" style="height: 50px;" id="birthday">
                        <option>1991年</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group col-sm-4 ">
                    <label class="word" for="month">月份</label>
                    <select class="form-control month" style="height: 50px;" id="month">
                        <option>1月</option>
                        <option>2月</option>
                        <option>3月</option>
                        <option>4月</option>
                        <option>5月</option>
                        <option>6月</option>
                        <option>7月</option>
                        <option>8月</option>
                        <option>9月</option>
                        <option>10月</option>
                        <option>11月</option>
                        <option>12月</option>
                    </select>
                </div>
                <div class="form-group col-sm-2 ">
                    <label class="word" for="date">日期</label>
                    <select class="form-control date" style="height: 50px;" id="date">
                        <option>1日</option>
                        <option>2日</option>
                        <option>3日</option>
                        <option>4日</option>
                        <option>5日</option>
                        <option>6日</option>
                        <option>7日</option>
                        <option>8日</option>
                        <option>9日</option>
                        <option>10日</option>
                        <option>11日</option>
                        <option>12日</option>
                        <option>13日</option>
                        <option>14日</option>
                        <option>15日</option>
                        <option>16日</option>
                        <option>17日</option>
                        <option>18日</option>
                        <option>19日</option>
                        <option>20日</option>
                        <option>21日</option>
                        <option>22日</option>
                        <option>23日</option>
                        <option>24日</option>
                        <option>25日</option>
                        <option>26日</option>
                        <option>27日</option>
                        <option>28日</option>
                        <option>29日</option>
                        <option>30日</option>
                        <option>31日</option>

                    </select>
                </div>
            </div>

        </form>
        <div class="button-5  ">
            <a class="btn btn-primary  profile-size profile-1 word " href="{{ asset("/member/profile-1") }}" role="button">取消編輯</a>
            <a class="btn btn-primary  profile-size profile-2 word " href="{{ asset("/member/profile-1") }}" role="button">確認送出</a>
        </div>
    </div>
</div>

@endsection
