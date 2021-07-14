@extends('layouts.sample')

@section('page_title')

關於Ample Villa

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">
<link rel="stylesheet" href="{{ asset(("css/member-connection-2.css")) }}">

@endsection

@section('content')


<main>
    <div class="row m-auto login no-gutters">
        <div class="col  white   ">
            <div class="title ">會員登入</div>
            <form class="login-form " method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group  ">
                    <label class="word" for="email">帳號/電子信箱</label>
                    <input class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus type="email"
                        style="height: 50px;" class="form-control email" id="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="word" for="password">密碼</label>
                    <input class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password" type="password" style="height: 50px;"
                        class="form-control password" id="password">
                </div>
                <div class="button">
                    <span class="forget word">忘記密碼?</span>
                    <button type="submit" class="btn btn-primary log" role="button">登入</button>
                    {{-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                    </a>
                    @endif --}}
                </div>
                <div class="button-1  pt-1">
                    <span class="news-friend word">新朋友?快加入我們</span>
                    <a class="btn btn-primary log  " href="{{ asset("/member/register") }}" role="button">註冊</a>
                </div>
            </form>

        </div>
    </div>

</main>

@endsection
