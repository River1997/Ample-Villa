{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.sample')

@section('page_title')

關於Ample Villa

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset(("css/member-login.css")) }}">

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
