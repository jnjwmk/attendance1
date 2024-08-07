@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp1.css') }}">
@endsection('css')

@section('nav')
<nav>
    <ul>
        <li>
            <a class="header-nav" href="/">ホーム</a>
            <a class="header-nav" href="/">日付一覧</a>
            <a class="header-nav" href="/">ログアウト</a>
        </li>
    </ul>
</nav>
@endsection('nav')

@section('main')
<div class="attendance">

    <div class="name-message">
        <h2> {{}} お疲れ様です！</h2>
    </div>

    <div class="attendance-stamp">
        <form class="stamp-form" action="/" method="post">
            @csrf
            <button class="attendance-stamp__btn" type="submit">勤怠開始</button>
        </form>


        <form class="stamp-form" action="/" method="post">
            @csrf
            <button class="attendance-stamp__btn" type="submit">勤怠終了</button>
        </form>

        <form class="stamp-form" action="/" method="post">
            @csrf
            <button class="attendance-stamp__btn" type="submit">休憩開始</button>
        </form>

        <form class="stamp-form" action="/" method="post">
            @csrf
            <button class="attendance-stamp__btn" type="submit">休憩終了</button>
        </form>



    </div>
</div>
@endsection('main')