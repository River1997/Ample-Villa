@extends('layouts.sample')

@section('page_title')

會員註冊

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset("css/member-login.css")}}">
<link rel="stylesheet" href="{{ asset("css/member-register.css")}}">

@endsection

@section('content')

<div class="row m-auto login no-gutters">
    <div class="col  white   ">
        <div class="title ">會員註冊</div>
        <form class="login-form " method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group  ">
                <label class="word" for="name">帳號</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus style="height: 50px;">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="word" for="password">輸入密碼</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" style="height: 50px;">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="word" for="password-confirm">確認密碼</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" style="height: 50px;">
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
                    <label class="word" for="phone">手機號碼</label>
                    <input type="phone" style="height: 50px;" class="form-control phone" id="phone" name="">
                </div>
            </div>
            <div class="form-group">
                <label class="word" for="email">電子信箱</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" style="height: 50px;">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-row  form-number-date">
                <div class="form-group col-sm-6 ">
                    <label class="word" for="birthday">出生年</label>
                    <select class="form-control birthday" style="height: 50px;" id="birthday" name="birthday">
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
            <div class=" form-group " style="height: 80px;">
                <label>
                    <input type="radio" name="radio-button" value="css" checked />
                    <span>已確認以上資料皆正確，並同意接受會員服務條款及隱私條款。</span>
                </label>
            </div>
            <div class="button-3 long ">
                {{-- <a class="btn btn-primary  long  " href="#" role="button">發送驗證信件</a> --}}
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('發送驗證信件') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection

@section('js')


@endsection
