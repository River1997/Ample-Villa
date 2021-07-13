@extends('layouts.sample')

@section('page_title')

會員專區

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-profile-1.css")) }}">
@endsection

@section('content')

<div class="row m-auto login no-gutters">
    <div class="col  white   ">
        <div class="title-1 ">會員專區</div>
        <div class="btn-group-1">
            <a href="" class="small-button active">會員資料 </a>
            <a href="" class="small-button">訂房查詢</a>
            <a href="" class="small-button">聯絡我們</a>
        </div>
        <form class="profile-form">
            <fieldset disabled>
                <div class="form-group">
                    <label class="word-1" for="disabledTextInput">帳號</label>
                    <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                        placeholder="Peter123">
                </div>
                <div class="form-group">
                    <label class="word-1" for="disabledTextInput">密碼</label>
                    <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                        placeholder="********">
                </div>
                <div class="form-row form-number ">
                    <div class="form-group col-sm-4 ">
                        <label class="word-1" for="disabledTextInput">國際號碼</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                            placeholder="台灣(+886)">
                    </div>
                    <div class="form-group col-sm-8">
                        <label class="word-1" for="disabledTextInput">手機號碼</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                            placeholder="0912345678">
                    </div>
                </div>
                <div class="form-group">
                    <label class="word-1" for="disabledTextInput">電子信箱</label>
                    <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                        placeholder="abc123456789@gmail.com">
                </div>
                <div class="form-row  form-number-date">
                    <div class="form-group col-sm-6 ">
                        <label class="word-1" for="disabledTextInput">出生年</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                            placeholder="1911年">
                    </div>
                    <div class="form-group col-sm-4 ">
                        <label class="word-1" for="disabledTextInput">月份</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                            placeholder="1月">
                    </div>
                    <div class="form-group col-sm-2  profile ">
                        <label class="word-1" for="disabledTextInput">日期</label>
                        <input type="text" style="height: 50px;" id="disabledTextInput" class="form-control "
                            placeholder="11日">
                    </div>
                </div>

            </fieldset>
            <div class="button-5  ">
                <a class="btn btn-primary  profile-size " href="#" role="button">編輯資料</a>
            </div>
        </form>
    </div>
</div>

@endsection
