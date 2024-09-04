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
        $userId = auth()->id();
        $checkIn = Carbon::now();

        Attendance::create([
            'work_start_time' => $checkIn,
            'work_end_time' => null,
            'user_id' => $userId,
            'date' => $checkIn,
        ]);

        return redirect('/');

    }

    //退勤時間追加
    public function checkOut ()
    {
        $userId = auth()->id();
        $checkOut = Carbon::now();

        Attendance::find(4)->update([
            'work_end_time' => $checkOut,
        ]);

        return redirect('/');
    }

    //休憩開始時間追加
    public function breakStart ()
    {
        $userId = auth()->id();
        $attendance= Attendance::where('user_id', $userId)->whereNull('work_end_time')->first();

        if ($attendance) {
            $breakStart = Carbon::now();

            Breaks::create([
                'break_start_time' => $breakStart,
                'break_end_time' => null,
                'attendance_id' => $attendance->id,

            ]);

        }

        return redirect('/');
    }

    // 休憩終了時間追加
    public function breakEnd ()
    {
        $userId = auth()->id();

        $currentBreak = Breaks::whereHas('attendance' , function ($query) use ($userId)
        {
            $query->where('user_id' , $userId)
                ->whereNull('work_end_time');
        })
        ->whereNull('break_end_time')
        ->first();

        if ($currentBreak) {
            $breakEnd = Carbon::now();

            $currentBreak->update([
                'break_end_time' => $breakEnd,
            ]);
        }

        return redirect('/');
    }

    // 日付の取得
    public function datePicker (Request $request)
    {
        $selectedDate = $request->input('date', Carbon::today()->toDateString());

        $date = Carbon::parse($selectedDate);
        $previousDate = $date->copy()->subDay()->toDateString();
        $nextDate = $date->copy()->addDay()->toDateString();

        $attendances = Attendance::whereDate('created_at' , $selectedDate)->get();

        return view('attendance',[
            'attendances'=> $attendances,
            'selectedDate'=> $selectedDate,
            'previousDate' => $previousDate,
            'nextDate' => $nextDate,
        ]);
    }
}