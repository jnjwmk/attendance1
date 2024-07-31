<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
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

    public function sumAttendance()
    {
        $attendances = Attendance::with('employee')->paginate(5);

        foreach ($attendances as $attendance){
            if ($attendance->employee)
                {
                    $employeeName[] = $attendance->employee->name;
                }
        }



        $attendances = $attendances->map(function($attendance){
            $workStart = Carbon::parse($attendance->work_start_time);
            $workEnd = Carbon::parse($attendance->work_end_time);

            $totalWorkMinutes = $workStart->diffInMinutes($workEnd);

            $totalBreakMinutes = $attendance->breaks->sum(function($break){
                $breakStart = Carbon::parse($break->break_start_time);
                $breakEnd = Carbon::parse($break->break_end_time);
                return $breakStart->diffInMinutes($breakEnd);
            });

            $actualWorkMinutes = $totalWorkMinutes - $totalBreakMinutes;

            return [
                'total_work_minutes' => $totalWorkMinutes,
                'total_break_minutes' => $totalBreakMinutes,
                'actual_work_minutes' => $actualWorkMinutes,
            ];
        });

        return view('attendance' , compact('attendances','employeeName'));
    }


    // 打刻画面表示
    public function showStamp()
    {
        return view('stamp');
    }
}