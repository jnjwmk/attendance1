@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
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
        <h2>原田美優さんお疲れ様です！</h2>
    </div>

    <div class="attendance-stamp">
        <input class="attendance-stamp__item" type="button" name="start" value="勤怠開始">

        <input class="attendance-stamp__item" type="button" name="end" value="勤怠終了">

        <input class="attendance-stamp__item" type="button" name="break-start" value="休憩開始">

        <input class="attendance-stamp__item" type="button" name="break-end" value="休憩終了">
    </div>
</div>
@endsection('main')