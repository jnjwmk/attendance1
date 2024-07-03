<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // 勤怠画面表示
    public function showAttendance()
    {
        return view('attendance');
    }

    // 打刻画面表示
    public function showStamp()
    {
        return view('stamp');
    }
}
