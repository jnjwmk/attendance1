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

@section('main')
<div class="date-picker">
    <a class="arrow" href="{{ url ('/attendance?date=' . $previousDate) }}">&larr;</a>

    <input class=" date-display" type="hidden" id="dateInput" name="date" value="{{ $selectedDate }}">

    <a class="arrow" href="{{ url ('/attendance?date=' . $nextDate) }}">&rarr;</a>

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
                {{ $attendance->totalBreakSeconds() }}
            </td>
            <td>
                {{ $attendance->totalWorkMinutes() }}
            </td>
            @endforeach
    </tbody>
</table>
@endsection