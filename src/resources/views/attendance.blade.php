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
            <a class="header-nav" href="{{ route('logout') }}">ログアウト</a>
        </li>
    </ul>
</nav>
@endsection('nav')

@section('main')
<div class="attendance-main">
    <div class="date-picker">
        <a class="arrow arrow-left" href="{{ url ('/attendance?date=' . $previousDate) }}"></a>

        <span> {{ $selectedDate }}</span>

        <a class="arrow arrow-right" href="{{ url ('/attendance?date=' . $nextDate) }}"></a>
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
                    {{ $attendance -> user -> name}} </td>
                <td>
                    {{ $attendance->work_start_time}}
                </td>
                <td>
                    {{ $attendance->work_end_time}}
                </td>
                <td>
                    {{ $attendance->totalBreakTimes() }}
                </td>
                <td>
                    {{ $attendance->totalWorkTimes() }}
                </td>
                @endforeach
        </tbody>
    </table>
    {{ $attendances -> links('vendor/pagination/custom') }}
</div>
@endsection