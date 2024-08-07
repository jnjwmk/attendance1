<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Breaks;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon
;

class AttendanceController extends Controller
{
    // 勤怠画面表示
    public function showAttendance()
    {
        $attendances = Attendance::paginate(5);
        return view('attendance' ,compact('attendances'));
    }

    // 打刻画面表示
    public function showStamp()
    {
        return view('stamp');
    }

    // 勤務時間追加
    public function checkIn ()
    {

        $checkIn = Carbon::now();

        Attendance::create([
            'work_start_time' => $checkIn,
        ]);
    }

    //退勤時間追加
    public function checkOut ()
    {

        $checkOut = Carbon::now();

        Attendance::create([
            'work_end_time' => $checkOut,
        ]);
    }

    //休憩開始時間追加
    public function breakStart ()
    {
        $breakStart = Carbon::now();

        Breaks::create([
            'break_start_time' => $breakStart,

        ]);
    }

    // 休憩終了時間追加
    public function breakEnd ()
    {
        $breakEnd = Carbon::now();

        Breaks::create([
            'break_end_time' => $breakEnd,
        ]);
    }
}