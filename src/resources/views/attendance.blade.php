@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance1.css') }}">
@endsection

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