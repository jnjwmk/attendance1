<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
;

class AttendanceController extends Controller
{
    // 勤怠画面表示
    public function showAttendance()
    {
        $attendances = Attendance::all();
        return view('attendance' , compact('attendances'));
    }


    // 打刻画面表示
    public function showStamp()
    {
        return view('stamp');
    }
}