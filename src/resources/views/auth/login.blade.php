@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('main')
<div class="login-form">
    <h4 class="login-form__heading content__heading">ログイン</h4>

    <div class="login-form__inner">
        <form class="login-form__form" action="/login" method="post">
            @csrf
            <div class="login-form__group">
                <input class="login-form__input" type="text" name="email" value="{{ old ('email') }}"
                    placeholder="メールアドレス">
                @error('email')
                {{ $message}}
                @enderror
            </div>

            <div class="login-form__group">
                <input class="login-form__input" type="text" name="password" placeholder="パスワード">
                @error('password')
                {{ $message}}
                @enderror
            </div>

            <div class="login-form__group">
                <button class="login-btn" action="/" type="submit">ログイン</button>
            </div>
            <div class="login-form__register">
                <p>アカウントをお持ちでない方はこちら</p>
                <a class="login-form__register-link" href="/register">会員登録</a>
            </div>
        </form>
    </div>
</div>
@endsection('main')