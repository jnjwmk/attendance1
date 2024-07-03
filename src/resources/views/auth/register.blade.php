@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('main')
<div class="register-form">
    <h4 class="register-form__heading content__heading">会員登録</h4>

    <div class="register-form__inner">
        <form class="register-form__form" action="/register" method="post">
            @csrf
            <div class="register-form__group">
                <input class="register-form__input" type="text" name="name" value="{{ old ('name')}}" placeholder="名前"></input>
                @error ('name')
                {{ $message}}
                @enderror
            </div>

            <div class="register-form__group">
                <input class="register-form__input" type="text" name="email" value="{{ old ('email')}}" placeholder="メールアドレス"></input>
                @error ('email')
                {{ $message}}
                @enderror
            </div>

            <div class="register-form__group">
                <input class="register-form__input" type="text" name="password" placeholder="パスワード"></input>
                @error ('password')
                {{ $message}}
                @enderror
            </div>

            <div class="register-form__group">
                <input class="register-form__input" type="text" name="confirm-password" placeholder="確認用パスワード"></input>
            </div>

            <div class="register-form__group">
                <button class="register-btn" action="/" type="submit">会員登録</button>
            </div>
            <div class="register-form__login">
                <p>アカウントをお持ちの方はこちらから</p>
                <a class="register-form__login-link" href="/login">ログイン</a>
            </div>
        </form>
    </div>
</div>
@endsection('main')