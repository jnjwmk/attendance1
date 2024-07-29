@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
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

@section('main')
<div>

    <input class="attendance-date">

</div>

<table>
    <thead>
        <tr>
            <th>名前</th>
            <th>勤務開始</th>
            <th>勤務終了</th>
            <th>休憩時間</th>
            <th>勤務時間</th>
        </tr>
    </thead>
    <tbody>

        @foreach( $attendances as $attendance)
        <tr>
            <td>
                {{ $attendance->employee->name}}
            </td>
            <td>
                {{ $attendance->work_start_time}}
            </td>
            <td>
                {{ $attendance->work_end_time}}
            </td>
            <td>

            </td>
            @endforeach
    </tbody>
</table>
@endsection